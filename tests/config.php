<?php
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
    ],
        // Database connection settings
        "db" => [
            "host" => "localhost",
            "dbname" => "slim3mvc",
            "user" => "root",
            "pass" => "root"
        ],
];
