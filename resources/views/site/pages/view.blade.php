@extends('layouts.app')

{{--@if($page->hasImage('header'))--}}
{{--@section('header')--}}
{{--    <header>--}}
{{--        <img src="{{ $page->image('cover','default',['w'=> 1024]) }}"--}}
{{--             srcset="--}}
{{--                    {{ $page->image('header','default',['w'=> 1024, 'dpr' => 1]) }} 1x,--}}
{{--                    {{ $page->image('header','default',['w'=> 1024, 'dpr' => 2]) }} 2x,--}}
{{--                    {{ $page->image('header','default',['w'=> 1024, 'dpr' => 3]) }} 3x"--}}
{{--             alt="{{ $page->imageAltText('header') }}"--}}
{{--             class="w-full">--}}
{{--    </header>--}}
{{--@endsection--}}
{{--@endif--}}
@section('content')
    <div class="container relative mt-6">
        @if($page->sub_title)
            <h1 class="font-bold text-2xl lg:text-4xl mb-5 md:mb-6 lg:mb-4">{{ $page->sub_title }}</h1>
        @endif
        @if($page->description)
            <div class="lg:text-lg lg:w-8/12">{!! $page->description !!}</div>
        @endif
    </div>
    @if(count($page->blocks))
        <section class="mb-4">
            {!! $page->renderBlocks() !!}
        </section>
    @endif
@endsection

@section('assets')
{{--    <script defer src="{{ mix('js/page.js') }}"></script>--}}
@endsection
