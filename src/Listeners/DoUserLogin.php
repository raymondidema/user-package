<?php namespace Raymondidema\UserPackage\Listeners;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Raymondidema\Commandee\Events\EventListener;
use Raymondidema\UserPackage\Users\UserWasCreated;

class DoUserLogin extends EventListener {

    /**
     * Logging in the user
     * @param UserWasCreated $event
     */
    public function whenUserWasCreated(UserWasCreated $event)
    {
        Auth::loginUsingId($event->user->id);
    }
}