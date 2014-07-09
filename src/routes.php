<?php

## Login Section (FRONTEND ONLY)
Route::get('login', ['as' => 'session.create', 'uses' => 'Raymondidema\UserPackage\Controllers\SessionController@create']);
Route::post('login', ['as' => 'session.store', 'uses' => 'Raymondidema\UserPackage\Controllers\SessionController@store']);
Route::get('logout', ['as' => 'session.destroy', 'uses' => 'Raymondidema\UserPackage\Controllers\SessionController@destroy']);

## Registration Section (FRONTEND ONLY)
Route::get('register', ['as' => 'register.create', 'uses' => 'Raymondidema\UserPackage\Controllers\RegistrationController@create']);
Route::post('register', ['as' => 'register.store', 'uses' => 'Raymondidema\UserPackage\Controllers\RegistrationController@store']);

## Profile Section
Route::group(['before' => ['auth', 'role:member']], function () {
    Route::get('profile', ['as' => 'profile.show', 'uses' => 'Raymondidema\UserPackage\Controllers\ProfilesController@show']);
    Route::get('profile/create', ['as' => 'profile.create', 'uses' => 'Raymondidema\UserPackage\Controllers\ProfilesController@create']);
    Route::post('profile', ['as' => 'profile.store', 'uses' => 'Raymondidema\UserPackage\Controllers\ProfilesController@store']);
    Route::get('profile/edit', ['as' => 'profile.edit', 'uses' => 'Raymondidema\UserPackage\Controllers\ProfilesController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'Raymondidema\UserPackage\Controllers\ProfilesController@update']);
});