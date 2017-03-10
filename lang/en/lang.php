<?php
return [
    'plugin' => [
        'name' => 'Blog Themes',
        'description' => 'Provides theming options for the Rainlab Blog plugin.',
    ],
    'models' => [
        'category' => [
            'fields' => [
                'color' => 'Theme Color',
                'css' => 'Theme CSS',
                'theme_images' => 'Theme Images'
            ]
        ]
    ],
    'tabs' => [
        'theme' => 'Theme',
        'advanced_theme' => 'Advanced Theme'
    ]
];