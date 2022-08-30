@extends('layouts.app',['autoHeight' => true])

@section('meta')
    @include('site.partials._meta',['meta' => $page])
@endsection

@section('content')
    @if(Session::has('status'))
        <div class=" my-4 py-2 px-6 bg-dgrey font-medium text-white border border-dgrey">
            {{session('status')}}
        </div>
    @endif
    <div class="md:flex w-full">
        <div class="w-full md:w-10/12 lg:w-8/12">
            <h1 class="font-medium">{{ $page->title }}</h1>

            <form action="{{ route('page.contact.send') }}" method="post" class="flex flex-wrap mt-16">
                @csrf
                <div class="w-full md:w-1/2 md:pr-4">
                    <input type="text" placeholder="{{ __('Name') }}" name="name" class="border-2 border-dgrey placeholder:text-dgrey w-full px-2">
                    @if ($errors->has('name'))
                        <div class="text-red-600">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="w-full mt-4 md:mt-0 md:w-1/2">
                    <input type="text" placeholder="{{ __('Subject') }}" name="subject" class="border-2 border-dgrey placeholder:text-dgrey w-full px-2">
                    @if ($errors->has('subject'))
                        <div class="text-red-600">
                            {{ $errors->first('subject') }}
                        </div>
                    @endif
                </div>
                <div class="w-full mt-4">
                    <textarea type="text" placeholder="{{ __('Message') }}" name="message" rows="6" class="border-2 border-dgrey placeholder:text-dgrey w-full px-2"></textarea>
                    @if ($errors->has('message'))
                        <div class="text-red-600">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>
                <div class="lg:w-full mt-4">
                    <button type="submit" class="px-4 py-2 border-2 border-dgrey text-dgrey hover:bg-dgrey hover:text-white">{{ __('Send') }}</button>
                </div>
            </form>

            <div class="mt-16">
                {!! $page->contact_information !!}
            </div>

        </div>

        <div class="w-full md:w-2/12 lg:w-4/12 text-right">
            <p>
                <a href="facebook.com" class="inline-block">
                    <img src="{{ asset('assets/images/facebook.png') }}" width="40" alt="facebook logo">
                </a>
            </p>
        </div>
    </div>
@endsection

@section('assets')
    {{--    <script defer src="{{ mix('js/page.js') }}"></script>--}}
@endsection
