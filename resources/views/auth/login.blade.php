@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="col-lg-offset-4 col-lg-4" style="margin-top:100px">
                <div class="block-unit" style="text-align:center; padding:8px 8px 8px 8px; margin-top:15px;">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-lg-offset-1 col-md-10">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-lg-offset-1 col-md-10">
                            <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="checkbox">
                                <label style="color:white">
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-6">
                            <button type="submit" class="submit btn-success btn btn-large">
                                Login
                            </button>

                            {{-- <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Forgot Your Password?
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </form>        
    </div>
</div>
@endsection
