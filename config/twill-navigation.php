<?php

return [
    'articles' => [
        'title' => 'Articles',
        'module' => true,
    ],
    'publications' => [
        'title' => 'Publications',
        'module' => true,
    ],
    'exhibitions' => [
        'title' => 'Exhibitions',
        'module' => true,
    ],
    'lexicons' => [
        'title' => 'Lexicons',
        'module' => true,
    ],
    'installations' => [
        'title' => 'Installations',
        'module' => true,
    ],
    'videos' => [
        'title' => 'Videos',
        'module' => true,
    ],


    'works' => [
        'title' => 'Works',
        'route' => 'admin.works.works.index',
        'primary_navigation' => [
            'works' => [
                'title' => 'Works',
                'module' => true,
            ],
            'photos' => [
                'title' => 'Photos',
                'module' => true,
            ],
            'upload' => [
                'title' => 'Upload',
                'route' => 'admin.upload',
            ],
        ],
    ],

    'pages' => [
        'title' => 'Pages',
        'route' => 'admin.pages.pages.index',
        'primary_navigation' => [
            'pages' => [
                'title' => 'Pages',
                'module' => true,
            ],
            'contact' => [
                'title' => 'Contact',
                'singleton' => true,
            ],
        ],
    ],
    'settings' => [
        'title' => 'Settings',
        'route' => 'admin.settings',
        'params' => ['section' => 'meta'],
        'primary_navigation' => [
            'meta' => [
                'title' => 'Meta',
                'route' => 'admin.settings',
                'params' => ['section' => 'meta']
            ]
        ]
    ],
];
