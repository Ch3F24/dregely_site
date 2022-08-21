@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'contact_information',
        'label' => 'Kontakt információk',
        'toolbarOptions' => ['link','clean','bold','italic'],
        'placeholder' => 'Case study text',
        'translated' => true
    ])
@stop
