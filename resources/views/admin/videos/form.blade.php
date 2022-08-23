@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'optional',
        'label' => 'Opcionális mező',
        'translated' => true,
        'maxlength' => 150
    ])

    @formField('input', [
        'name' => 'location',
        'label' => 'Hely',
        'translated' => true,
    ])

    @formField('input', [
        'name' => 'year',
        'label' => 'Év',
        'maxlength' => 12
    ])

    @formField('files', [
        'translated' => false,
        'name' => 'videos',
        'label' => 'Video',
        'max' => 20,
    ])
@stop
