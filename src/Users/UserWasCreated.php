<?php namespace Raymondidema\UserPackage\Users;

class UserWasCreated {

    /**
     * @var User
     */
    public $user;

    /**
     * @param User $user
     */
    function __construct(User $user)
    {
        $this->user = $user;
    }

}