<?php

use Pagekit\Application as App;

return [
    'name' => 'jebster/mapWidget',

    'label' => 'Map',

    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {
            $scripts->register('widget-map', 'maps:app/bundle/widget-maps.js', ['~widgets']);
        }
    ],

    'render' => function ($widget) use ($app) {
//        $location = App::module('maps')->config['location'];

        $location = $widget->get('location');


        return $app->view('maps/widget/map.php', compact('location'));
    }
];