@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('block_editor', [
        'name' => 'default',
        'label' => 'Block',
        'title' => 'Default', // title to display in the Editor dropdown selector
        'blocks' => [
            'text',
            'social_link'
        ],
    ])
@stop
