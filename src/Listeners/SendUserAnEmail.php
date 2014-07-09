<?php namespace Raymondidema\UserPackage\Listeners;

use Illuminate\Support\Facades\Log;
use Raymondidema\Commandee\Events\EventListener;
use Raymondidema\UserPackage\Users\UserWasCreated;

class SendUserAnEmail extends EventListener{

    /**
     * Sending the user a welcome message
     * @param UserWasCreated $event
     */
    public function whenUserWasCreated(UserWasCreated $event)
    {

        Log::info('email should be send');
//        $data = [];
//        Mail::send('emails.welcome', $data, function($message) use ($event)
//        {
//            $message->to($event->user->email, $event->user->present()->fullName)->subject('Welcome!');
//        });
    }

}