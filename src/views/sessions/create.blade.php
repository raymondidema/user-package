<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
    <title>Login</title>
    <meta name="description" content="Login Page" />
    <meta name="HandHeldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="generator" content="Codeboard" />
    <link rel="alternate" type="application/rss+xml" title="Login" href="/rss/" />
    <link rel="canonical" href=""/>

    <!-- Open Graph: Basic -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />

    <!-- Open Graph: Optional -->
    <meta property="og:description" content="" />
    <meta property="og:locale" content="" />
    <meta property="og:site_name" content="" />

    <link rel="stylesheet" href="/assets/bootstrap-3.2.0-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/uikit-2.8.0/css/addons/uikit.addons.css"/>
    <link rel="stylesheet" href="/assets/font-awesome-4.1.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/css/main.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<header class="container header">
    <section class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <img src="/images/logo.png" alt="Logo" class="brand" height="100"/>
        </div>
    </section>
</header>
<main class="container main">
    <section class="row">
        <article class="col-md-offset-4 col-md-4 text-center">
            {{ Form::open(['route' => 'session.store', 'autocomplete' => 'off']) }}
            <div class="form-group">
                {{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail Address']) }}
            </div>
            <div class="form-group">
                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Log In', ['class' => 'btn btn-block btn-login']) }}
            </div>
            {{ Form::close() }}
        </article>
    </section>
</main>
<footer class="container footer">
    <section class="row">
        <article class="col-md-offset-4 col-md-4 text-center">
            <p><a href="#" class="forgot-password">Forgot Password?</a></p>
            <p>Don't haven an Account?  {{ link_to_route('register.create', 'Sign Up', null, ['class' => 'text-link']) }}</p>
        </article>
    </section>
</footer>

<script src="/assets/jquery/jquery-1.11.1.min.js"></script>
<script src="/assets/uikit-2.8.0/js/uikit.min.js"></script>
<script src="/assets/uikit-2.8.0/js/addons/notify.min.js"></script>
@if(Session::has('flash_message'))
<script>
    $(function(){
        $.UIkit.notify({
            message : '<div class="notify-block"><i class="fa fa-warning"></i></div>{{ Session::get('flash_message') }}',
            status  : 'danger',
            timeout : 0,
            pos     : 'bottom-left'
        });
    });
</script>
@endif
</body>
</html>