@extends('layouts.app')

@section('styles')
<link href="{{asset('css/login.css')}}" rel="stylesheet" />
@endsection

@section('content')

<img class="bg-wave" src="{{asset('img/wave.png')}}">

	<div class="container">
       
		<div class="img">
			<img src="{{asset('img/bg.svg')}}">
        </div>
        
		<div class="login-content">
            
			<form method="POST" action="{{ route('login') }}">
                @csrf
                <img class="avatar" src="{{asset('img/avatar.svg')}}">
                
                <h2 class="title text-center">SIGN IN</h2>
                <div class="md-form">
                    <i class="fas fa-envelope prefix"></i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
                    <label for="email">{{ __('Email') }}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="md-form">
                    <i class="fas fa-lock prefix"></i>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label for="password">{{ __('Password') }}</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            	<a href="{{ route('register') }}">{{ __('Register') }}</a>
                <button type="submit" class="btn">
                    {{ __('Login') }}
                </button>
            </form>
        </div>
    </div>
@endsection
