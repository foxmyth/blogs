@extends('layouts.master')

@section('content')
<div class="container">
    {{-- start: first block --}}
    <div class="row">
        {{-- start: user profile --}}
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>User Profile</dtitle>
                <hr>
                <div class="thumbnail">
                    <img src="{{ URL::asset('assets/img/face80x80.jpg') }}" alt="{{ $user->name }}" class="img-circle">
                </div>
                <h1>{{ $user->name }}</h1>
                <h3>{{ $user->email }}</h3>
                <br />
                <div class="info-user">
                    <a href="{{ url('/profile') }}"><span aria-hidden="true" class="li_user fs1"></span></a>
                    <span aria-hidden="true" class="li_settings fs1"></span>
                    <span aria-hidden="true" class="li_mail fs1"></span>
                    <span aria-hidden="true" class="li_key fs1"></span>
                </div>
            </div>
        </div>
        {{-- end: user profile --}}
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
            </div>
        </div>
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
            </div>
        </div>
    </div>
    {{-- end: first block --}}
</div>
@endsection
