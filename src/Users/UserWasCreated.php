<?php namespace Raymondidema\UserPackage\Users;

class UserWasCreated {

    public $user;

    function __construct(User $user)
    {
        $this->user = $user;
    }

}