<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Blog for phpgirls</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Blog for phpgirls">

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/login.css') }}">
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/ico/favicon.ico') }}">
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
        </div>
    </div>

	@yield('header')

	@yield('content')

	<script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>