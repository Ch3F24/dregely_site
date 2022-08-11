@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('select', [
    'name' => 'parent_work_id',
    'label' => 'Parent',
    'options' => $works,
    ])

    @section('sideFieldset')
        @include('admin.partials.seo')
    @endsection
@stop
