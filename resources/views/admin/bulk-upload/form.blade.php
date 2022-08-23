@extends('twill::layouts.free')

@section('customPageContent')
    <div id="app">
        <bulk-upload></bulk-upload>
    </div>
@stop
@push('extra_js')
    @vite('resources/js/admin.js')
@endpush
