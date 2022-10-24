@extends('twill::layouts.form')

@section('contentFields')
    @formField('select', [
        'name' => 'work_id',
        'label' => 'Sorozat',
        'options' => $works
    ])

    @formField('input', [
        'name' => 'reference_number',
        'label' => 'Referencia szám',
        'maxlength' => 4,
        'required' => true,
    ])

    @formField('input', [
        'name' => 'year',
        'label' => 'Év',
        'maxlength' => 15
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
        'extraMetadatas' => [
            [
                'name' => 'landscape',
                'label' => 'Fektetett',
                'type' => 'checkbox'
            ],
        ],
    ])

{{--    @section('sideFieldset')--}}
{{--        @include('admin.partials.seo')--}}
{{--    @endsection--}}
@stop
