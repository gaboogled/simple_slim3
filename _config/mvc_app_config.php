<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

date_default_timezone_set('America/Arizona');
$config = [
    'settings' => [
        'displayErrorDetails' => true,

        'logger' => [
            'name' => 'slim3mvc',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/logs/slim3mvc.log',
        ],

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../mvc/_templates',
            'twig' => [
                'cache' => __DIR__ . '/../_cache/twig',
                'debug' => true,
                'auto_reload' => true,
        ],

        // Database connection settings
        "db" => [
            "host" => "localhost",
            "dbname" => "slim3mvc",
            "user" => "root",
            "pass" => "root"
        ]
     ]
   ]
];

$app = new \Slim\App($config);
