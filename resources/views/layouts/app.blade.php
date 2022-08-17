<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')


    @routes

    @vite('resources/js/side.js')
    @yield('css')

</head>
<body class="h-screen relative">
    @include('site.partials._header')
    <main class="container md:flex md:gap-x-4">
        <div class="md:w-3/12" id="app">
        </div>
        <div class="md:w-9/12 relative flex flex-col items-start">
            @yield('content')
        </div>
    </main>
    <footer class="h-[100px]">
    </footer>
</body>
</html>
