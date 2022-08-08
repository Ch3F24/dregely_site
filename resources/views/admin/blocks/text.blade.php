@twillBlockTitle('Szöveges tartalom')
@twillBlockIcon('text')
@twillPropMax(1)

@twillBlockValidationRulesForTranslatedFields([
'content' => 'required'
])

@twillBlockGroup('app')

@formField('checkbox', [
    'name' => 'three_col',
    'label' => '3 oszlopba törés'
])

@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Tartalom',
    'translated' => true,
    'required' => true,
    'placeholder' => 'Content',
    'maxlength' => 4000,
    'editSource' => false,
    'toolbarOptions' => [
        ['header' => [2, 3, false]],
        ["script" => "super"],
        ["script" => "sub"],
        'bold',
        'italic',
        'underline',
        'strike',
        "blockquote",
        ['list' => 'ordered'],
        ['list' => 'bullet'],
        ['indent' => '-1'],
        ['indent' => '+1'],
        ["align" => []],
        ["direction" => "rtl"],
        'link',
        "clean",
    ],
])
