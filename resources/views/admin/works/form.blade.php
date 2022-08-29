@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('input', [
        'name' => 'reference_number',
        'label' => 'Referencia szám',
        'maxlength' => 2,
        'required' => true,
    ])

    @formField('input', [
        'name' => 'year',
        'label' => 'Év',
        'maxlength' => 15
    ])

    @formField('select', [
    'name' => 'parent_work_id',
    'label' => 'Parent',
    'options' => $works,
    'searchable' => true
    ])
    @formField('medias', [
        'name' => 'cover',
        'label' => 'Borító',
    ])

    @section('sideFieldset')
        @include('admin.partials.seo')
    @endsection
@stop
