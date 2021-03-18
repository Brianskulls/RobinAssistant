@extends('layouts.login_register.no-scroll')

@section('title','Login')

@section('head')
    <link rel="stylesheet" href="{{ url('css/login_register/register.css') }}">
@endsection

@section('content')
    <div class="holder-left-text">
        <h1>Hi, Nice to meet you!</h1>
        <p>We at Robin Assistant are very happy that you want to use our service!</p>
        <p>As soon as you have created an account, you will see a tutorial on the dashboard with how everything works, and you will also receive information about the payment scheme. If you have any questions, you can always contact our team.
        </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group-two">
                <div class="form-group">
                    <input id="first_name" type="text" name="first_name" placeholder="First name" required />
                </div>

                <div class="form-group">
                    <input id="last_name" type="text" name="last_name" placeholder="Last name" required />
                </div>
            </div>
            <div class="form-group-two">
                <div class="form-group">
                    <input id="company_name" type="text" name="company_name" placeholder="Company name" />
                </div>

                <div class="form-group">
                    <input id="phone_number" type="tel" name="phone_number" placeholder="Phone number" />
                </div>
            </div>

            <div class="form-group">
                <input id="email" type="email" name="email" placeholder="Email" required />
            </div>

            <div class="form-group">
                <input id="password" type="password" name="password" placeholder="Password" required />
            </div>

            <div class="form-group">
                <select name="package" id="package">
                    <option value="" disabled selected>Subscription</option>
                    <option value="family_plan">Family plan</option>
                    <option value="family_plan">Family plan</option>
                    <option value="family_plan">Family plan</option>
                    <option value="family_plan">Family plan</option>
                    <option value="family_plan">Family plan</option>
                </select>
            </div>

            <div class="form-buttons">
                <button class="outline-button">
                    Register
                </button>
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


            {{--        </div>--}}
        </form>
    </div>
@endsection
