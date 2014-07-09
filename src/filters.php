<?php

Route::filter('role', function($route, $request, $role)
{
    if (Auth::guest() or ! Auth::user()->hasRole($role))
    {
        return App::abort(403);
    }
});