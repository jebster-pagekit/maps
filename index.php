<?php

use Pagekit\Application;
return [
    'name' => 'maps',
    'main' => function(Application $app) {
    },
    'autoload' => [
        'Jebster\\Maps\\' => 'src'
    ],
    'resources' => [
        'maps:' => ''
    ],
    'routes' => [
        'maps' => [
            'path' => '/maps',
            'controller' => 'Jebster\\Maps\\Controller\\MapsController'
        ]
    ],

    'config' => [
        'location' => [
            'header' => 'Title',
            'width' => '100%',
            'height' => '320px',
            'location' => 'Bystævneparken 19, 2700 Brønshøj',
            'zoom' => 14,
            'satellite' => true
        ]
    ],

    'widgets' => [
        'widgets/mapWidget.php'
    ],

    'settings' => '@maps'
];