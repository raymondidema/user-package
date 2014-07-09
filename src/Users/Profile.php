<?php namespace Raymondidema\UserPackage\Users;

use Eloquent;

class Profile extends Eloquent {

    /**
     * @var array
     */
    protected $fillable = [
        'cover',
        'image',
        'location',
        'bio',
        'website',
        'twitter',
        'facebook',
        'github',
        'notify_articles'
    ];

    /**
     * @return mixed
     */
    public function user()
    {
        return $this->hasOne('Codeboard\Users\Entities\User');
    }

} 