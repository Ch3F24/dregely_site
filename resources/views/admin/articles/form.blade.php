@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'name' => 'description',
        'label' => 'Description',
        'maxlength' => 500,
        'type' => 'textarea',
        'rows' => 3
    ])

    @formField('input', [
        'name' => 'year',
        'label' => 'Év',
        'type' => 'number',
        'maxlength' => 4

    ])

    @formField('files', [
    'translated' => true,
    'name' => 'pdf',
    'label' => 'PDF',
    'note' => 'Add the pdf'
    ])

@stop
