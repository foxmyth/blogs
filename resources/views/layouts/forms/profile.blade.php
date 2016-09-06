{!! Form::open(['action' => ['Admin\UserController@update', $user->id], 'id' => 'register-form', 'class' => 'form']) !!}
	<div class="body">
		<legend>Profile</legend>
		<div class="thumbnail" >		
			<img src="{{ URL::asset('assets/img/face.jpg') }}" />			
		</div>
		<br />
		{{-- profile photo --}}
		{!! Form::file('profile', ['class' => 'input-huge']) !!}
		
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