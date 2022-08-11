<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta name="api-token" content="{{ auth()->check() && session()->has('api_token') ? session()->get('api_token') : '' }}">--}}
{{--    <meta name="GA" content="{{ env('GA_ID') }}">--}}


    <title>{{ config('app.name', 'Laravel') }}</title>
{{--    <meta name="og:site_name" content="{{ config('app.name') }}">--}}
    @yield('meta')

    @vite('resources/js/app.js')

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--    <script src="http://balinthaz:8080/js/app.js"></script>--}}

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">--}}

    <!-- Styles -->
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}

{{--    @include('front.partials._svg_links')--}}

</head>
<body class="min-h-screen flex flex-col ">
    @include('site.partials._header')

{{--    <div id="app" class="flex-1">--}}
{{--        @yield('header')--}}

    <main class="container md:flex">
        <div class="md:w-3/12">
            @include('site.partials._nav')
        </div>
        <div class="md:w-9/12">
            @yield('content')
        </div>
    </main>

{{--    </div>--}}

{{--    @include('front/partials/_footer')--}}

</body>

{{--@yield('assets')--}}
{{--@include('front/partials/_analytics')--}}
<script src="//unpkg.com/alpinejs" defer></script>

</html>
