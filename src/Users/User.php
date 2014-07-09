<?php namespace Raymondidema\UserPackage\Users;

use Eloquent;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Support\Facades\Hash;
use Raymondidema\Presenter\PresentableTrait;
use Raymondidema\UserPackage\Traits\RoleTrait;
use Raymondidema\Commandee\Events\EventGenerator;
use Raymondidema\Presenter\Contracts\PresentableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface, PresentableInterface {

    use UserTrait, RemindableTrait, RoleTrait, EventGenerator, PresentableTrait;

    protected $presenter = 'Raymondidema\UserPackage\Presenters\User';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password', 'remember_token');

    /**
     * @var array
     */
    protected $fillable = ['email', 'password', 'first_name', 'last_name'];

    /**
     * @return mixed
     */
    public function roles()
    {
        return $this->belongsToMany('Raymondidema\UserPackage\Users\Role')->withTimestamps();
    }

    /**
     * @param $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * @return mixed
     */
    public function profile()
    {
        return $this->hasOne('Raymondidema\UserPackage\Users\Profile');
    }

    /**
     * @param $first_name
     * @param $last_name
     * @param $email
     * @param $password
     *
     * @return $this
     */
    public function register($first_name, $last_name, $email, $password)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;

        $this->save();

        $this->raise(new UserWasCreated($this));

        return $this;
    }

} 