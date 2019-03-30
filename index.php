<?php
/* Entry point to Slim 3 MVC application */
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
require 'config.php';

// Get container
$container = $app->getContainer();

// USING PHP-VIEW
// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('./mvc/views/_templates/');
};

// Render template in route
$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'index.html');
});

// Render PHP template in route
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');

// Run app
$app->run();

//That's it!
