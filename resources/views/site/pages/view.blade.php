@extends('layouts.app')

@section('meta')
    @include('site.partials._meta',['meta' => $page])
@endsection

@section('content')
    <div class="relative h-full">
            @if(count($page->blocks))
                <section class="w-full -ml-8 pl-8 scroll-left mb-4 max-h-full overflow-scroll scrollbar scrollbar-thin scrollbar-thumb-dgrey scrollbar-thumb-rounded scrollbar-track-rounded">

                    <div class="text-left">
                        {!! $page->renderBlocks() !!}
                    </div>
                </section>
            @endif
    </div>
@endsection
