@extends('user-package::layouts.master')

@section('meta_title', 'Profile Creator')

@section('body_class', 'profile-page')

@section('container')
@if(empty($profile->cover))
<header class="cover">
    <div class="progress hidden">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
    <a class="btn btn-rgba-black btn-profile hidden-xs uk-form-file" href="#">change cover <input name="cover" id="upload-select" type="file"></a>
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
    <div class="progress hidden">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
        </div>
    </div>
    <a class="btn btn-rgba-black btn-profile hidden-xs uk-form-file" href="#">change cover <input name="cover" id="upload-select" type="file"></a>
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
<div class="container page">
    <div class="row">
        <div class="col-md-6">
            {{ Form::model($profile, ['route' => 'profile.update', 'method' => 'put', 'class' => 'form-horizontal']) }}
            {{ Form::hidden('cover', null, ['id' => 'my_cover']) }}
            <div class="form-group">
                {{ Form::label('location', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::text('location', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('website', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::text('website', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('bio', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::textarea('bio', null, ['class' => 'form-control', 'rows' => 3]) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('twitter', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::text('twitter', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('facebook', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::text('facebook', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('github', null, ['class' => 'control-label col-md-4']) }}
                <div class="col-md-8">
                    {{ Form::text('github', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                    <div class="checkbox">
                        <label>
                            {{ Form::checkbox('notify_articles', null, ['class' => 'form-control']) }}
                            Receive blog updates?
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-4 col-md-8">
                    {{ Form::submit('Update Profile', ['class' => 'btn btn-default']) }}
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/assets/uikit-2.8.0/css/addons/uikit.addons.min.css"/>
@stop

@section('javascript')
<script src="/assets/uikit-2.8.0/js/uikit.min.js"></script>
<script src="/assets/uikit-2.8.0/js/addons/upload.min.js"></script>
<script>

    $(function(){

        var progressbar = $(".progress"),
            bar         = progressbar.find('.progress-bar'),
            settings    = {

                action: '/profile/cover',

                param: 'cover',

                allow : '*.(jpg|jpeg|gif|png)',

                loadstart: function() {
                    bar.css("width", "0%").text("0%");
                    progressbar.removeClass("hidden");
                },

                progress: function(percent) {
                    percent = Math.ceil(percent);
                    bar.css("width", percent+"%").text(percent+"%");
                },

                allcomplete: function(response) {

                    bar.css("width", "100%").text("100%");

                    setTimeout(function(){
                        progressbar.addClass("hidden");
                    }, 250);
                    $('#my_cover').val(response);
                    $('.cover').css('background-image', 'url('+response+')');
                }
            };
        var select = $.UIkit.uploadSelect($("#upload-select"), settings),
            drop   = $.UIkit.uploadDrop($("#upload-drop"), settings);
    });

</script>
@stop