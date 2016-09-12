@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		@foreach ($users as $user)
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
					<dtitle>
						@if ($user->is_admin == "A") 
							Administrator
						@elseif ($user->is_admin == "D")
							Developer
						@else
							Operator
						@endif
					</dtitle>
					<hr />
					{{-- member's thumbnail  --}}
					<div class="thumbnail">
						<img src="{{ !empty($user->profile)? $user->profile: 'profiles/not_found.png' }}" alt="{{ $user->name }}", class="img-circle img-size-100x100" />	
					</div>
					<h1>{{ $user->name }}</h1>
					<h3>{{ $user->location }}</h3>
					<h3>{{ $user->email }}</h3>
					<br />
					<div class="info-user">
						{{-- <span aria-hidden="true" class="li_user fs1"></span> --}}
						<a href="{{ url('members/'.$user->id) }}"><span aria-hidden="true" class="li_settings fs1" id="show-profile"></span></a>
						<span aria-hidden="true" class="li_mail fs1" id="show-mail"></span>
						<a href="{{ url('password/reset') }}"><span aria-hidden="true" class="li_key fs1"></span></a>
						@if ($user->is_active == "W")
							<span aria-hidden="true" class="li_pen fs1"></span>
						@endif
						@if ($user->is_active == "L")
							<span aria-hidden="true" class="li_lock fs1"></span>
						@endif
						
					</div>
				</div>
			</div>
		@endforeach
	</div>

	<div class="info-user">
		<a href="{{ url('members/create') }}"><span aria-hidden="true" class="li_user fs1"></span></a>
	</div>

	<div class="info-user">
		{{ $users->links() }}
	</div>
</div>	
@endsection