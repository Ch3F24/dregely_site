{{--@formField('tags',[--}}
{{--    'label' => 'Keywords'--}}
{{--])--}}
@formField('input', [
'name' => 'keywords',
'label' => 'Kulcsszavak',
'translated' => true,
])

@formField('input', [
    'name' => 'meta_description',
    'label' => 'Meta Description',
    'translated' => true,
    'maxlength' => 156
])
