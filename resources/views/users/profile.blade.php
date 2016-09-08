@extends('layouts.master')

@section('content')
<div class="container">	
	<div class="row">
		{{-- start: show profile --}}
		<div class="col-lg-6">
			<div class="register-info-wraper">
				<div id="register-info">
					<div class="cont2">
						<div class="thumbnail">							
							<img src="{{ $member->profile }}" alt="{{ $user->name }}" class="img-circle img-size-200x200" />
						</div>
						<h2>{{ $user->name }}</h2>
					</div>
					{{-- start: inner row --}}
					<div class="row">
						<div class="col-lg-5">
							<div class="cont3">
								<p><ok>Username</ok><br /> {{ $user->name }}</p>
								<p><ok>Mail</ok><br /> {{ $user->email }}</p>
								<p><ok>Location</ok><br /> {{ $member->location }}</p>								
							</div>
						</div>
						<div class="col-lg-5">
							<div class="cont3">
								<p><ok>Registered</ok><br /> {{ $user->created_at->format('F d, Y') }}</p>
								<p><ok>Last login</ok> </p>
								<p><ok>Mobile</ok><br /> {{ $member->mobile }}</p>
							</div>
						</div>
					</div>
					{{-- end: inner row --}}
					<hr>
					{{-- start: choose option --}}
					<div class="cont2">
						<h2>Choose Your Option</h2>
					</div>
					<br />
					<div class="info-user2">
						{{-- <span aria-hidden="true" class="li_user fs1"></span> --}}
						<span aria-hidden="true" class="li_settings fs1" id="show-profile"></span>
						{{-- <span aria-hidden="true" class="li_mail fs1" id="show-mail"></span> --}}
						<span aria-hidden="true" class="li_key fs1"></span>
						<span aria-hidden="true" class="li_lock fs1"></span>
						{{-- <span aria-hidden="true" class="li_pen fs1"></span> --}}
					</div>
					{{-- end: choose option --}}
				</div>
			</div>
		</div>
		{{-- end: show profile --}}

		{{-- start: any area --}}
		<div class="col-sm-6 col-lg-6">
			<div id="register-wraper">
				{{-- start: sub panel --}}
				<div id="register-default">
					@if (isset($error)) 
						{{ $error }}
					@elseif (session('status'))
						{{ session('status') }}
					@endif
				</div>
				{{-- profile update --}}
				<div id="register-profile">
					@include("layouts.forms.profile")
				</div>
				{{-- send contact mail --}}
				<div id="register-mail">
					mail form
				</div>
				{{-- end: sub panel --}}
			</div>
		</div>
		{{-- end: any area --}}
	</div>
</div>

{{-- start: footer --}}
<div id="footerwrap">
	<footer class="clearfix"></footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<p><img src="{{ URL::asset('assets/img/logo.png') }}" alt=""></p>
				<p>Blocks Dashboard Theme - Crafted With Love - Copyright 2013</p>
			</div>
		</div>
	</div>
</div>
{{-- end: footer --}}
@endsection
