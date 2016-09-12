@extends('layouts.master')

@section('content')
<div class="container">
    {{-- start: first block --}}
    <div class="row">
        {{-- start: user profile --}}
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
                <dtitle>Profile</dtitle>
                <hr>
                <div class="thumbnail">
                    <img src="{{ $profile->profile }}" alt="{{ $profile->name }}" class="img-circle img-size-120x120">
                </div>
                <h1>{{ $profile->name }}</h1>
                <h3>{{ $profile->email }}</h3>
                <br />
                <div class="info-user">
                    <a href="{{ url('/profile') }}"><span aria-hidden="true" class="li_settings fs1"></span></a>
                    {{-- <span aria-hidden="true" class="li_mail fs1"></span> --}}
                    {{-- <span aria-hidden="true" class="li_key fs1"></span> --}}
                    @if ($profile->is_active == "L")
                        <span aria-hidden="true" class="li_lock fs1"></span>
                    @endif
                </div>
            </div>
        </div>
        {{-- end: user profile --}}
        <div class="col-sm-3 col-lg-3">
            {{-- start: new comming --}}
            <div class="half-unit">
                <dtitle>New Comming</dtitle>
                <hr />
                <div class="cont2">
                    <img src="{{ !empty($new_comming->profile)? $new_comming->profile: 'profiles/not_found.png' }}" alt="{{ $new_comming->name }}" class="img-size-60x60" />
                    <br />
                    <br />
                    <p>{{ $new_comming->name }}</p>
                    <p><bold>{{ $new_comming->email }}</bold></p>
                </div>
            </div>
            {{-- end: new comming --}}
        </div>
        <div class="col-sm-3 col-lg-3">
            <div class="dash-unit">
            </div>
        </div>
    </div>
    {{-- end: first block --}}
</div>
@endsection
