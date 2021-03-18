<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title'.' - RA' ?? 'Robin Assistant')</title>
    <link rel="stylesheet" href="{{ url('css/login_register/no-scroll.css') }}">
    <link rel="stylesheet" href="{{ url('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ url('css/tailwind.css') }}">
    @yield('head')
</head>
<body>
    <div class="holder">
        <div class="holder-left">
            <div class="holder-left-back">
                <a class="holder-left-back-link" href="{{ route('infopage') }}">
                    <img src="{{ url('images/arrow_left.svg') }}" alt="Go back">
                    <p>Back</p>
                </a>
            </div>
            <div class="holder-left-content">
                @yield('content')
            </div>
        </div>
        <div class="holder-right">
            <a href="{{ route('infopage') }}">
                <img src="{{ url('images/main-logo.svg') }}" alt="Robin Assistant logo">
            </a>

        </div>
    </div>
</body>
</html>
