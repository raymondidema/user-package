<?php namespace Raymondidema\UserPackage\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;

class ProfilesController extends \BaseController
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $profile = $user->profile;
        if(count($profile))
            return Redirect::route('profile.show');
        return View::make('user-package::profiles.create', compact('user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = Auth::user();
        $input = Input::only('location', 'website', 'bio', 'twitter', 'facebook', 'github', 'cover', 'image');
        $user->profile()->create($input);
        return Redirect::route('profile.show');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id = null)
    {
        $user = Auth::user();
        $profile = $user->profile;
        if(count($profile))
            return View::make('user-package::profiles.show', compact('user', 'profile'));
        return View::make('user-package::profiles.empty');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id = null)
    {
        $user = Auth::user();
        $profile = $user->profile;
        if(count($profile))
            return View::make('user-package::profiles.edit', compact('user', 'profile'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id = null)
    {
        $user = Auth::user();
        $input = Input::only('location', 'website', 'bio', 'twitter', 'facebook', 'github', 'cover', 'image', 'notify_articles');
        $user->profile()->update($input);
        return Redirect::route('user-package::profile.show');
    }

}