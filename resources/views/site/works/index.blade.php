@extends('layouts.app')

@section('meta')
    @include('site.partials._meta')
@endsection

@section('content')
{{--    <div class="container relative mt-6">--}}
{{--        @if($page->sub_title)--}}
{{--            <h1 class="font-bold text-2xl lg:text-4xl mb-5 md:mb-6 lg:mb-4">{{ $page->sub_title }}</h1>--}}
{{--        @endif--}}
{{--        @if($page->description)--}}
{{--            <div class="lg:text-lg lg:w-8/12">{!! $page->description !!}</div>--}}
{{--        @endif--}}
{{--    </div>--}}
{{--    @if(count($page->blocks))--}}
{{--        <section class="mb-4">--}}
{{--            {!! $page->renderBlocks() !!}--}}
{{--        </section>--}}
{{--    @endif--}}
@endsection

@section('assets')
    {{--    <script defer src="{{ mix('js/page.js') }}"></script>--}}
@endsection
