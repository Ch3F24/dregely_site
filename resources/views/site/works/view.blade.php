@extends('layouts.app')


@section('meta')
    @include('site.partials._meta')
@endsection

@section('content')
    <div id="app" class="h-full w-full">
    </div>
{{--    <div class="container image-container relative">--}}
{{--        <div class="swiper work-slider h-full">--}}
{{--            <div class="swiper-wrapper">--}}
{{--                @foreach($work->photos as $photo)--}}
{{--                    <div class="swiper-slide flex-row h-full w-full">--}}
{{--                        <div @class(['h-[80%]' => count($photo->imagesAsArrays('photos')) > 1,--}}
{{--                        <div @class(['h-full' => count($photo->imagesAsArrays('photos')) === 1,--}}
{{--                                    'w-full h-full'])>--}}
{{--                            <img src="{{ $photo->imageAsArray('photos')['src'] }}" alt="first"--}}
{{--                            'landscape' => $photo->imageAsArray('photos')['landscape'],--}}
{{--                            'h-full' => !$photo->imageAsArray('photos')['landscape'],--}}
{{--                                @class([--}}

{{--                                    'object-contain max-h-full my-auto'])>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container relative mt-6 flex items-center px-[42px]">--}}
{{--        <div class="w-1/3 flex space-x-4 h-full">--}}
{{--            @foreach($work->photos as $photo)--}}
{{--                @if(count($photo->imagesAsArrays('photos')) > 1)--}}
{{--                        @foreach($photo->imagesAsArrays('photos') as $thumbs)--}}
{{--                            <div class="w-1/3">--}}
{{--                                <img src="{{ $thumbs['src'] }}" alt="first" class="w-[100px] h-[100px] object-cover" data-landscape="{{ $thumbs['landscape']}}">--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                @endif--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="w-1/3 h-full">--}}
{{--            <div class="swiper-pagination"></div>--}}
{{--        </div>--}}
{{--        <div class="w-1/3">Valami</div>--}}

{{--        <div class="swiper-button-next"></div>--}}
{{--        <div class="swiper-button-prev"></div>--}}
{{--    </div>--}}
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
