<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 font-bold font-heading text-xl">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline uppercase pr-6">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full text-center">
            <div>
                <h1 class="text-black text-center tracking-wider text-6xl mb-6 font-heading font-black">
                    PHP Security Demonstration Demo App
                </h1>
                <span class="text-serif text-2xl font-light">
                    by Antti Rössi, @anamus_
                </span>
            </div>
        </div>
    </div>
</div>
</body>
</html>
