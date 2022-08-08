@twillBlockTitle('Social Media Link')
@twillBlockIcon('text')

@formField('input', [
    'name' => 'url',
    'label' => 'Url',
    'required' => true,
    'type' => 'url'
])
@formField('select', [
    'name' => 'type',
    'label' => 'Típus',
    'placeholder' => 'Válasszon típust',
    'options' => [
        [
        'value' => 'instagram',
        'label' => 'Instagtam'
        ],
        [
        'value' => 'facebook',
        'label' => 'Facebook'
        ],
        [
        'value' => 'skype',
        'label' => 'Skype'
        ],
        [
        'value' => 'youtube',
        'label' => 'YouTube'
        ]
    ]
])
