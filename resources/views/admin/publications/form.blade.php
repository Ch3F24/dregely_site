@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 150
    ])

    @formField('input', [
        'name' => 'year',
        'label' => 'Év',
        'maxlength' => 15
    ])

    @formField('files', [
    'translated' => true,
    'name' => 'pdf',
    'label' => 'PDF',
    'note' => 'Add the pdf'
    ])

@stop
