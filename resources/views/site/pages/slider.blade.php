@extends('layouts.app')


@section('meta')
    @if(isset($data))
        @include('site.partials._meta',['meta' => $data])
    @else
        @include('site.partials._meta',['title' => $title])
    @endif
@endsection

@section('content')
    <div id="app" class="h-full w-full flex flex-col">
        <slider route="{{ $route }}"
                :with-thumb="{{ $thumb ?? false }}"
                :is-image="{{ $isImage ?? false }}"
                :dots="{{ $dots ?? false }}"
                :exhibition="{{ $isExhibition ?? false }}"
                :is-video="{{ $isVideo ?? false }}"
                :slides-per-view="{{ $slides }}">
        </slider>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
