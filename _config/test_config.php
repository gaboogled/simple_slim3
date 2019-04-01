<?php
/**
* simple Slim 3 MVC Framework (https://github.com/gaboogled/simple)
*
* @link      https://github.com/gaboogled/simple
* @copyright Copyright (c) 2019 George Freeney-Jones
* @license   (MIT License)
* https://github.com/gaboogled/simple/blob/master/LICENSE/
*/
// Purpose: simple Base Unit test settings.

return [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => false,
        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../mvc/_templates',
            'twig' => [
                'cache' => __DIR__ . '/../_cache/twig',
                'debug' => true,
                'auto_reload' => true,
            ],
        ],
        // monolog settings
        'logger' => [
            'name' => 'app',
            'path' => __DIR__ . '/../logs/slim3mvc.log',
        ],
    ]
  ];
