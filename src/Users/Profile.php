<?php namespace Raymondidema\UserPackage\Users;

use Eloquent;

class Profile extends Eloquent {

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

    public function user()
    {
        return $this->hasOne('Codeboard\Users\Entities\User');
    }

} 