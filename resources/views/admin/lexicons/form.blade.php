@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'translated' => true,
        'name' => 'description',
        'label' => 'Tartalom',
        'required' => true,
        'type' => 'textarea',
        'rows' => 3
    ])
@stop
