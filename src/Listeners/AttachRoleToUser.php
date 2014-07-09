<?php namespace Raymondidema\UserPackage\Listeners;

use Raymondidema\Commandee\Events\EventListener;
use Raymondidema\UserPackage\Users\UserWasCreated;

class AttachRoleToUser extends EventListener {

    /**
     * @param UserWasCreated $event
     */
    public function whenUserWasCreated(UserWasCreated $event)
    {
        $event->user->assignRole(1);
    }

}