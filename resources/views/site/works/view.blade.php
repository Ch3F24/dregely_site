@extends('layouts.app')


@section('meta')
    @include('site.partials._meta',['meta' => $work])
@endsection

@section('content')
    <div id="app" class="h-full w-full flex flex-col">
        <slider route="{{ route('api.photo.index',$work->id) }}" :with-thumb="true" :is-image="true"></slider>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
