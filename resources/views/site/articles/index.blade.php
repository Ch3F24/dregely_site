@extends('layouts.app')

@section('meta')
    @include('site.partials._meta',['title' => __('Articles')])
@endsection

@section('content')
    <div id="app" class="h-full w-full">
        <slider route="{{ route('api.article.index') }}" :slides-per-view="3" :dots="true"></slider>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
