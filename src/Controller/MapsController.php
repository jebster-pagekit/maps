<?php


namespace Jebster\Maps\Controller;

use Pagekit\Application as App;

class MapsController
{
    /**
     * @Access(admin=true)
     */
    public function indexAction()
    {
        $module = App::module('maps');
        $config = $module->config;
        $location = $config['location'];

        return [
            '$view' => [
                'title' => __("Maps Settings"),
                'name' => 'maps:views/admin/settings.php'
            ],
            '$data' => [
                'location' => $location
            ]
        ];
    }

    /**
     * @Request({"location": "array"}, csrf=true)
     * @Access(admin=true)
     */
    public function updateAction($location = [])
    {
        App::config('maps')->set('location', $location);

        return ['message' => 'success'];
    }
}
