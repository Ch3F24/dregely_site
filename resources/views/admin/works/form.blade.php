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
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Borító',
    ])
    @formField('date_picker', [
    'name' => 'date',
    'label' => 'Date',
    'altFormat' => 'Y',
    'withTime' => false
    ])

    @section('sideFieldset')
        @include('admin.partials.seo')
    @endsection
@stop
