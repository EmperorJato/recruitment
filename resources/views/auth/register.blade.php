@extends('layouts.app')

@section('styles')
<link href="{{mix('css/register.css')}}" rel="stylesheet" />
@endsection

@section('content')

<img class="wave2" src="{{asset('img/wave2.png')}}">

<div class="container">
    @if(session('success'))
    @section('session')
    <script type="text/javascript">
        $(function(){
            swal('Success', "Please contact the admin to access your account, Thank You", "success").then(function(){
                window.location.href = "{{route('login')}}";
            });
        });
    </script>
    @endsection
    @endif
    <div class="login-content">
        <form method="POST" action="{{ route('register.user') }}" id="form_reg" autocomplete="off">
            {{ csrf_field() }}
            <img  class="avatar" src="{{asset('img/avatar_reg.svg')}}">
            <h2 class="title text-center">SIGN UP</h2>
            <div class="md-form">
                <i class="fas fa-user prefix"></i>
                <input autocomplete="off" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                <label for="name">{{ __('Name') }}</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="md-form">
                <i class="fas fa-user-tie prefix"></i>
                <input autocomplete="off" id="position" type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" required>
                <label for="email">{{ __('Position') }}</label>
                @error('position')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="md-form">
                <i class="fas fa-envelope prefix"></i>
                <input autocomplete="off" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                <label for="email">{{ __('Email') }}</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="md-form">
                <i class="fas fa-lock prefix"></i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="md-form">
                <i class="fas fa-exclamation-triangle prefix"></i>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <a href="{{ route('login') }}">{{ __('Login') }}</a>
            <button type="submit" class="btn">
                {{ __('Register') }}
            </button>
        </form>
    </div>
    <div class="img">
        <img src="{{asset('img/reg_bg.svg')}}">
    </div>
</div>


@endsection


