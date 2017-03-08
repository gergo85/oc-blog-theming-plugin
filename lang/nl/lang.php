<?php
return [
    'plugin' => [
        'name' => 'Blog Themes',
        'description' => 'Voegt thema opties to aan Rainlab.Blog Plugin',
    ],
    'models' => [
        'category' => [
            'fields' => [
                'theme_color' => 'Thema Kleur',
                'theme_css' => 'Thema CSS',
                'theme_images' => 'Thema Afbeeldingen'
            ]
        ]
    ],
    'tabs' => [
        'theme' => 'Thema',
        'advanced_theme' => 'Geadvanceerd Thema'
    ]
];