@extends('layouts.app')

{{--@section('css')--}}
{{--    @vite('resources/css/slider.css')--}}
{{--@endsection--}}

@section('meta')
    @include('site.partials._meta')
@endsection

@section('content')
    <div id="app" class="h-full w-full flex flex-col">
        <grid-slider action="{{ $action }}"
                     route="{{ LaravelLocalization::transRoute('routes.work') }}">
        </grid-slider>
    </div>
    {{--    <div class="container p-0 relative flex-1 slider-container">--}}
{{--        <div class="swiper mySwiper swiper-grid-column">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                @foreach($works as $work)--}}
{{--                    <div class="swiper-slide work-thumbnails">--}}
{{--                        <img src="{{ $work->image('cover','default') }}" alt="image" class="h-full w-full object-cover">--}}
{{--                        <p>{{ $work->title }} - {{ \Carbon\Carbon::parse($work->date)->format('Y') }}</p>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container relative h-[44px] mt-6">--}}
{{--        <div class="swiper-pagination"></div>--}}
{{--        <div class="swiper-button-next"></div>--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--    </div>--}}
@endsection

@section('assets')
    @vite('resources/js/works_slider.js')
@endsection
