@extends('layouts.app')


@section('meta')
    @include('site.partials._meta',['meta' => $data])
@endsection

@section('content')
    <div id="app" class="h-full w-full flex flex-col">
        <slider route="{{ $route }}" :with-thumb="{{ $thumb }}" :is-image="{{ $isImage }}"></slider>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
