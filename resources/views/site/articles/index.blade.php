@extends('layouts.app')

@section('content')
    <div id="app" class="h-full w-full">
        <slider route="{{ route('api.article.index') }}" :slides-per-view="3"></slider>

    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
