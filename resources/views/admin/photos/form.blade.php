@extends('twill::layouts.form')

@section('contentFields')
    @formField('select', [
        'name' => 'work_id',
        'label' => 'Sorozat',
        'options' => $works
    ])
    @formField('date_picker', [
        'name' => 'date',
        'label' => 'Date',
        'altFormat' => 'Y',
        'withTime' => false
    ])
    @formField('input', [
        'name' => 'edition_number',
        'label' => 'Edition number',
        'placeholder' => 'Edition number',
        'maxlength' => 5,
        'prefix' => 'Ed.:'

    ])
    @formField('input', [
        'name' => 'size',
        'label' => 'Méret',
        'placeholder' => 'HHHxWWW',
        'maxlength' => 7,
    ])

    @formField('input', [
        'name' => 'print',
        'label' => 'Technika',
        'placeholder' => 'Technika',
        'translated' => true
    ])

    @formField('medias', [
        'name' => 'photos',
        'label' => 'Fotók',
        'max' => 20,
    ])

    @section('sideFieldset')
        @include('admin.partials.seo')
    @endsection
@stop
