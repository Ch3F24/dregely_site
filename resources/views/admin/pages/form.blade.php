@extends('twill::layouts.form')

@section('contentFields')
    @formField('block_editor', [
        'name' => 'default',
        'label' => 'Block',
        'title' => 'Default', // title to display in the Editor dropdown selector
        'blocks' => [
            'text',
            'file'
        ],
    ])
@section('sideFieldset')
    @include('admin.partials.seo')
@endsection
@stop

