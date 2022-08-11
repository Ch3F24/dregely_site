@extends('layouts.app')


@section('meta')
    @include('site.partials._meta')
@endsection

@section('content')
    <div class="container image-container relative">
        <div class="swiper work-slider h-full">
            <div class="swiper-wrapper">
                @foreach($work->photos as $photo)
                    <div class="swiper-slide flex-row h-full w-full">
                        <div @class(['h-[80%]' => count($photo->imagesAsArrays('photos')) > 1,
                                    'h-full' => count($photo->imagesAsArrays('photos')) === 1,
                                    'w-full'])>
                            <img src="{{ $photo->imageAsArray('photos')['src'] }}" alt="first"
{{--                            'landscape' => $photo->imageAsArray('photos')['landscape'],--}}
{{--                            'h-full' => !$photo->imageAsArray('photos')['landscape'],--}}
                                @class([

                                    'object-contain max-h-full m-auto'])>
                        </div>
                        @if(count($photo->imagesAsArrays('photos')) > 1)
                            <div class="h-[20%] flex pt-4 space-x-4">
                                @foreach($photo->imagesAsArrays('photos') as $thumbs)
                                    <div class="w-1/6 photo-thumb">
                                        <img src="{{ $thumbs['src'] }}" alt="first" class="w-full h-full object-cover" data-landscape="{{ $thumbs['landscape']}}">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container relative h-[44px] mt-6">
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
@endsection

@section('assets')
    @vite('resources/js/slider.js')
@endsection
