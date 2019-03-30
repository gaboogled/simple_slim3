<?php



date_default_timezone_set('America/Arizona');


$config = [
    'settings' => [
        'displayErrorDetails' => true,

        'logger' => [
            'name' => 'slim3mvc',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/logs/slim3mvc.log',
        ],
    ],
];
$app = new \Slim\App($config);
