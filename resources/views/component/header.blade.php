<!DOCTYPE html>
<!-- saved from url=(0022)http://localhost:4000/ -->
<html lang="zh-CN"><!-- Head tag --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="record study life">
    <meta name="author" content="John Doe">
    <meta property="og:title" content="maxiao&#39;s blog">
    <meta property="og:description" content="record study life">
    <meta property="og:site_name" content="maxiao&#39;s blog">
    <meta property="og:type" content="website">
    <meta property="og:image" content="http://lovema.xyzimg/home-bg.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="http://lovema.xyzimg/home-bg.jpg">
 
    <title>maxiao's blog</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('static/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('static/css/style.css') }}">
    <!-- Custom Fonts -->
    <link href="{{ URL::asset('static/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('static/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('static/css/css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('static/css/css(1)') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('static/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('styles')
    <link href="{{ URL::asset('static/css/featherlight.min.css') }}" type="text/css" rel="stylesheet">
<meta name="generator" content="Hexo 5.4.0">
</head>


<body>

    <!-- Menu -->
    <!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('/') }}">{{ $settings['logo_title']}}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ route('/') }}">
                                首页
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('post.categories') }}">   
                                分类
                        </a>
                    </li>
                    
                        @if(Auth::check())
                        <li>
                            <a href="javascript:;">当前用户：{{Auth::user()->username}}</a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}">退出登录</a>
                        </li>
                        @else 
                            <li>
                                <a href="{{ route('login.github')}}">   
                                    <span style="font-size: 14px" class="fa fa-github"></span>登录
                                </a>
                            </li>
                        @endif
                        
                    {{-- </li> --}}
                    {{-- <li>
                        <a target="_blank" rel="noopener" href="https://github.com/klugjo/hexo-theme-clean-blog">    
                                <i class="fa fa-github fa-stack-2x"></i>
                        </a>
                    </li> --}}
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
@if(session('notice'))
<div class="notice">
    {{ session('notice')}}
</div>
@endif

    <!-- Main Content -->
    <!-- Page Header -->
<!-- Set your background image for this header in the theme's configuration: index_cover -->
