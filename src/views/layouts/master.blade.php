<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
    <title>@yield('meta_title')</title>
    <meta name="description" content="@yield('meta_description')" />
    <meta name="HandHeldFriendly" content="true" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="generator" content="Codeboard" />
    <link rel="alternate" type="application/rss+xml" title="@yield('alter_title')" href="/rss/" />
    <link rel="canonical" href="@yield('canonical')"/>

    <!-- Open Graph: Basic -->
    <meta property="og:title" content="@yield('og_title')" />
    <meta property="og:type" content="@yield('og_type')" />
    <meta property="og:url" content="@yield('og_url')" />
    <meta property="og:image" content="@yield('og_image')" />
    @yield('og_images')

    <!-- Open Graph: Optional -->
    <meta property="og:description" content="@yield('og_description')" />
    <meta property="og:locale" content="@yield('og_locale')" />
    <meta property="og:site_name" content="@yield('og_site_name')" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/assets/bootstrap-3.2.0-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/main.min.css"/>
    @yield('css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="@yield('body_class')">
@yield('container')
<script src="/assets/jquery/jquery-1.11.1.min.js"></script>
@yield('javascript')
</body>
</html>