@extends('twill::layouts.settings')

@section('contentFields')
{{--    @formField('tags',[--}}
{{--        'label' => 'Keywords'--}}
{{--    ])--}}
    @formField('input', [
        'name' => 'keywords',
        'label' => 'Keywords',
        'translated' => true,
    ])

    @formField('input', [
    'name' => 'meta_description',
    'label' => 'Meta Description',
    'translated' => true,
    'maxlength' => 156
    ])

@stop
