{!! Form::open(['action' => ['Admin\UserController@update', $user->id], 'id' => 'register-form', 'class' => 'form', 'files' => true, 'method' => 'put']) !!}
	<div class="body">
		<legend>Profile</legend>
		<div class="thumbnail">
			<img src="{{ !empty($member->profile)? $member->profile: 'profiles/not_found.png' }}" id="profile-img" calss="img-size-200x200"/>
		</div>
		<br />
		{{-- profile photo --}}
		{!! Form::file('profile', ['class' => 'input-huge', 'id' => 'profile']) !!}
		
		{{-- user name --}}
		{!! Form::label('name', 'Username') !!}
		{!! Form::text('name', $user->name, ['class' => 'input-huge']) !!}

		{{-- location --}}
		{!! Form::label('location', 'Location') !!}
		{!! Form::text('location', $member->location, ['class' => 'input-huge']) !!}

		{{-- mobile --}}
		{!! Form::label('mobile', 'Mobile') !!}
		{!! Form::text('mobile', $member->mobile, ['class' => 'input-huge']) !!}
	</div>
	<div class="footer">
		{!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
	</div>
{!! Form::close() !!}