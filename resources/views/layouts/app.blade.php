<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--    <meta name="robots" content="index, follow">--}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    <meta name="api-token" content="{{ auth()->check() && session()->has('api_token') ? session()->get('api_token') : '' }}">--}}
{{--    <meta name="GA" content="{{ env('GA_ID') }}">--}}


{{--    <meta name="og:site_name" content="{{ config('app.name') }}">--}}
    @yield('meta')

    @vite('resources/css/app.css')
    @yield('css')

</head>
<body class="h-screen relative flex flex-col md:block">
{{--<body class="relative h-full">--}}
    @include('site.partials._header')

{{--    <div id="app" class="flex-1">--}}
{{--        @yield('header')--}}

    <main class="container flex-1 md:flex-auto md:flex md:gap-x-4 py-4 @if(isset($autoHeight)) h-auto min-h-auto @endif">
        <div class="md:w-3/12 overflow-hidden h-full hidden lg:block">
            @include('site.partials._nav')
        </div>
        <div class=" mt-12 md:mt-0 w-full lg:w-9/12 relative flex flex-col items-start">
            @yield('content')
        </div>
    </main>
    <footer class="container pb-4 pt-4">
        <div class="w-full lg:w-9/12 ml-auto md:pl-4">
            <p>&copy; Imre Drégely: All rights reserved</p>
        </div>
    </footer>

{{--    </div>--}}

{{--    @include('front/partials/_footer')--}}

</body>
@vite('resources/js/app.js')
@yield('assets')
<script src="//unpkg.com/alpinejs" defer></script>
@include('site/partials/_analytics')

</html>
