<?php

use Pagekit\Application;



return [
    'name' => 'maps',

    'main' => function(Application $app) {

    },

    'autoload' => [
        'Jebster\\Maps\\' => 'src'
    ],

    'routes' => [
        'maps' => [
            'path' => '/maps',
            'controller' => 'Jebster\\Maps\\Controller\\MapsController'
        ]
    ],

    'widgets' => [
        'widgets/mapWidget.php'
    ],
];