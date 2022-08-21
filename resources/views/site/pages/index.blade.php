@extends('layouts.app')

{{--@section('meta')--}}
{{--    @include('site.partials._meta',['meta' => $work])--}}
{{--@endsection--}}

@section('content')
    <div id="app" class="h-full w-full flex flex-col">
        <slider route="{{ $route }}"></slider>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
