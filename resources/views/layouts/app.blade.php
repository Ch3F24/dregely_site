<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta name="api-token" content="{{ auth()->check() && session()->has('api_token') ? session()->get('api_token') : '' }}">--}}
{{--    <meta name="GA" content="{{ env('GA_ID') }}">--}}


{{--    <meta name="og:site_name" content="{{ config('app.name') }}">--}}
    @yield('meta')

    @vite('resources/js/app.js')
    @yield('css')

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
<body class="h-screen relative">
{{--<body class="relative h-full">--}}
    @include('site.partials._header')

{{--    <div id="app" class="flex-1">--}}
{{--        @yield('header')--}}

    <main class="container md:flex md:gap-x-4 py-4 @if(isset($autoHeight)) h-auto min-h-auto @endif">
        <div class="md:w-3/12 overflow-hidden h-full">
            @include('site.partials._nav')
        </div>
        <div class=" mt-12 md:mt-0 md:w-9/12 relative flex flex-col items-start">
            @yield('content')
        </div>
    </main>
    <footer class="container pb-4 pt-12">
        <div class="md:w-9/12 ml-auto md:pl-4">
            <p>&copy; Imre Drégely:</p>
            <p>All rights reserved</p>
        </div>
    </footer>

{{--    </div>--}}

{{--    @include('front/partials/_footer')--}}

</body>

@yield('assets')
{{--@include('front/partials/_analytics')--}}
<script src="//unpkg.com/alpinejs" defer></script>

</html>
