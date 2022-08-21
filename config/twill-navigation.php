<?php

return [
    'photos' => [
        'title' => 'Photos',
        'module' => true,
    ],
    'works' => [
        'title' => 'Works',
        'module' => true,
    ],
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
        'params' => ['section' => 'contact'],
        'primary_navigation' => [
            'contact' => [
                'title' => 'Contact',
                'route' => 'admin.settings',
                'params' => ['section' => 'contact']
            ],
            'social_media' => [
                'title' => 'Social media',
                'route' => 'admin.settings',
                'params' => ['section' => 'social_media']
            ],
        ]
    ],
];
