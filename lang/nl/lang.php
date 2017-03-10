<?php
return [
    'plugin' => [
        'name' => 'Blog Themes',
        'description' => 'Voegt thema opties to aan Rainlab.Blog Plugin',
    ],
    'models' => [
        'category' => [
            'fields' => [
                'color' => 'Thema Kleur',
                'css' => 'Thema CSS',
                'theme_images' => 'Thema Afbeeldingen'
            ]
        ]
    ],
    'tabs' => [
        'theme' => 'Thema',
        'advanced_theme' => 'Geadvanceerd Thema'
    ]
];