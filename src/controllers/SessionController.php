<?php namespace Raymondidema\UserPackage\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class SessionController extends \BaseController
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::check())
            return Redirect::to('/profile');
        return View::make('user-package::sessions.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::only('email', 'password');
        if(Auth::attempt($input))
            return Redirect::intended('/profile');
        return Redirect::back()->withFlashMessage('E-mail Address and/or Password incorrect');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id = null)
    {
        Auth::logout();
        return Redirect::home();
    }


}