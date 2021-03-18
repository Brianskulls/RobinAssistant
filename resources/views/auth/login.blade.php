@extends('layouts.login_register.no-scroll')

@section('title','Login')

@section('head')
    <link rel="stylesheet" href="{{ url('css/login_register/login.css') }}">
@endsection

@section('content')
    <h1>Welcome back!</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input id="email" type="email" name="email" :value="old('email')" placeholder="E-mail" required />
        </div>

        <div class="form-group">
            <input id="password" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
        </div>

        <p class="forgot-password">Forgot your password?</p>

        <button class="outline-button">
            Login
        </button>

{{--        <div>--}}
{{--            <label for="remember_me" class="flex items-center">--}}
{{--                <input type="checkbox" id="remember_me" name="remember" />--}}
{{--                <span>Remember me</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div>--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a href="{{ route('password.request') }}">--}}
{{--                    Forgot your password?--}}
{{--                </a>--}}
{{--            @endif--}}


{{--        </div>--}}
    </form>
@endsection
