<?php

use Pagekit\Application as App;

return [
    'name' => 'jebster/mapWidget',

    'label' => 'Map',

    'events' => [
        /*
                'view.scripts' => function ($event, $scripts) use ($app) {
                    $scripts->register('widget-eventListWidget', 'events:js/widget.js', ['~widgets']);
                }*/

    ],

    'render' => function ($widget) use ($app) {
        $location = App::module('maps')->config['location'];

        return $app->view('maps/widget/map.php', compact('location'));
    }
];