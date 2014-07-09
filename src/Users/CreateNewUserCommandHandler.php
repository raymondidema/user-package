<?php namespace Raymondidema\UserPackage\Users;

use Raymondidema\Commandee\CommandHandler;
use Raymondidema\Commandee\Events\EventDispatcher;

class CreateNewUserCommandHandler implements CommandHandler {

    /**
     * @var User
     */
    protected $user;

    /**
     * @var \Raymondidema\Commandee\Events\EventDispatcher
     */
    protected $dispatcher;

    /**
     * @param User            $user
     * @param EventDispatcher $dispatcher
     */
    function __construct(User $user, EventDispatcher $dispatcher)
    {
        $this->user = $user;
        $this->dispatcher = $dispatcher;
    }


    /**
     * @param $command
     *
     * @return mixed
     */
    public function handle($command)
    {
        $user = $this->user->register($command->first_name, $command->last_name, $command->email, $command->password);

        $this->dispatcher->dispatch($user->releaseEvents());
    }
}