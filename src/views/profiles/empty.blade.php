@extends('user-package::layouts.master')

@section('meta_title', 'Create your Profile')

@section('container')
<div class="container page">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2>Heya, it seems you didn't have a profile created yet! Let's get started</h2>
            {{ link_to_route('profile.create', 'Create your profile', null, ['class' => 'create-profile-btn']) }}
        </div>
    </div>
</div>
@stop