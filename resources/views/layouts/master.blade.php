<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog for phpgirls</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog for phpgirls">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/main.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/font-style.css') }}">
	
	@if (Request::is('profile'))
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/register.css') }}">	
	@else	
		<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/flexslider.css') }}">
	@endif

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>	
	<script type="text/javascript" src="{{ URL::asset('assets/js/customize.js') }}"></script>

	<style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
	
</head>
<body>
	<!-- Navigation Menu -->
	<div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        	<div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('assets/img/logo30.png') }}" alt=""> PHPGirls Dashboard</a>
	        </div> 
	        <div class="navbar-collapse collapse">
	        	<ul class="nav navbar-nav">
	              <li><a href="{{ url('/home') }}"><i class="icon-home icon-white"></i> Home</a></li>
	              {{-- <li><a href="manager.html"><i class="icon-folder-open icon-white"></i> File Manager</a></li>
	              <li><a href="calendar.html"><i class="icon-calendar icon-white"></i> Calendar</a></li>
	              <li><a href="tables.html"><i class="icon-th icon-white"></i> Tables</a></li>
	              <li class="active"><a href="login.html"><i class="icon-lock icon-white"></i> Login</a></li> --}}
	              <li><a href="{{ url('/profile') }}"><i class="icon-user icon-white"></i> Profile</a></li>
				  <li><a href="{{ url('/members') }}"><i class="icon-user icon-white"></i> Members</a></li>
				  @if(Auth::check())
	            	<li><a href="{{ url('/logout') }}">Logout</a></li>
	              @endif
	            </ul>
	        </div>
	        <!--/.nav-collapse --> 
        </div>
    </div>	
	@yield('header')

	@yield('content')

	<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>	
</body>
</html>