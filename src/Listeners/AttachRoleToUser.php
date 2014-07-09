<?php namespace Raymondidema\UserPackage\Listeners;

use Raymondidema\Commandee\Events\EventListener;
use Raymondidema\UserPackage\Users\UserWasCreated;

class AttachRoleToUser extends EventListener {

    /**
     * Adding role to user
     * @param UserWasCreated $event
     */
    public function whenUserWasCreated(UserWasCreated $event)
    {
        $event->user->assignRole(1);
    }

}