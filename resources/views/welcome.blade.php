<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('site/partials/_meta')
    @vite('resources/js/app.js')
    @yield('css')

</head>
<body class="h-screen relative flex flex-col md:block bg-cover bg-no-repeat	bg-dgrey relative" style="background-image: url('{{ asset('assets/images/welcome.jpg') }}')">
    <a href="{{ route('work.index') }}" class="absolute w-full h-full top-0 left-0 z-10"></a>
    <header class="container">
        <div class="logo">
            <a href="{{ route('home') }}" class=" text-5xl font-bold text-white">Drégely<br>Imre</a>
        </div>
    </header>
{{--    <div></div>--}}
{{--<body class="relative h-full">--}}
{{--@include('site.partials._header')--}}

</body>

@yield('assets')
{{--@include('front/partials/_analytics')--}}
<script src="//unpkg.com/alpinejs" defer></script>

</html>
