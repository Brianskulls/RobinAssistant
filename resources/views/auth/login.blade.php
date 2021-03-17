@extends('layouts.login_register.no-scroll')

@section('title','Login')

@section('content')

    <h1>Welcome back!</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password" />
        </div>

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

{{--            <button>--}}
{{--                Login--}}
{{--            </button>--}}
{{--        </div>--}}
    </form>
@endsection
