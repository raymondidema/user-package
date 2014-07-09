<?php namespace Raymondidema\UserPackage\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Raymondidema\Commandee\ValidationCommandBus;
use Raymondidema\UserPackage\Users\CreateNewUserCommand;

class RegistrationController extends \BaseController
{
    /**
     * @var \Raymondidema\Commandee\ValidationCommandBus
     */
    protected $commandBus;

    /**
     * @param ValidationCommandBus $commandBus
     */
    function __construct(ValidationCommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::check())
            return Redirect::to('/profile');
        return View::make('user-package::registration.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('first_name', 'last_name', 'email', 'password');
        $command = new CreateNewUserCommand($input['email'], $input['first_name'], $input['last_name'], $input['password']);
        $this->commandBus->execute($command);
        return Redirect::to('/profile');
    }


}