@extends('layouts.app')


@section('meta')
    @include('site.partials._meta',['meta' => $work])
@endsection

@section('content')
    <div id="app" class="h-full w-full"></div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
