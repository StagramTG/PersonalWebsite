<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/laragon/www/grav-admin/user/themes/resu-folio/blueprints.yaml',
    'modified' => 1538998645,
    'data' => [
        'name' => 'Resu Folio',
        'version' => '0.1.0',
        'description' => 'Personal theme for Thomas\' site',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Thomas Gredin',
            'email' => 't.gredin@gmx.fr'
        ],
        'homepage' => 'https://github.com/thomas-gredin/grav-theme-resu-folio',
        'demo' => 'http://demo.yoursite.com',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/thomas-gredin/grav-theme-resu-folio/issues',
        'readme' => 'https://github.com/thomas-gredin/grav-theme-resu-folio/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
