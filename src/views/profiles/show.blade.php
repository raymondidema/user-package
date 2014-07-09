@extends('user-package::layouts.master')

@section('meta_title', 'Profile Dashboard')

@section('body_class', 'profile-page')

@section('container')
@if(empty($profile->cover))
<header class="cover">
    geen cover
    <section class="user-info">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-right">
                    <img src="{{ gravatar($user->email) }}" class="img-circle user-image" width="80" />
                </div>
                <div class="col-md-4">
                    <div class="user-name">
                        {{ $user->present()->fullName }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
@else
<header class="cover" style="background-image: url({{ $profile->cover }})">
    <section class="user-info">
        <div class="container">
            <div class="row">
                <div class="col-md-2 text-right">
                    <img src="{{ gravatar($user->email) }}" class="img-circle user-image" width="80" />
                </div>
                <div class="col-md-4">
                    <div class="user-name">
                        {{ $user->present()->fullName }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</header>
@endif
<main class="container">
    <div class="row">
        <section>
            <article class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Location</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->location }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Website</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->website }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Bio</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->bio }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Twitter</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->twitter }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Facebook</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->facebook }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Github</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $profile->github }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            {{ link_to_route('profile.edit', 'Edit Profile', null, ['class' => 'btn btn-default']) }}
                        </div>
                    </div>
                </div>

            </article>
            <article class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">E-mail address</label>
                        <div class="col-md-8">
                            <p class="form-control-static">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            {{ link_to_route('profile.edit', 'Change E-mail address', null, ['class' => 'btn btn-default']) }}
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="control-label col-md-4" for="">Password</label>
                        <div class="col-md-8">
                            <p class="form-control-static">&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-8">
                            {{ link_to_route('profile.edit', 'Change Password', null, ['class' => 'btn btn-danger']) }}
                        </div>
                    </div>
                </div>
            </article>
        </section>
    </div>
</main>
@stop