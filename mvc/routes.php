<?php

use Slim\Http\Request;
use Slim\Http\Response;

// VIEW Routes
$container['HomeController'] = function ($container) {
   return new \App\Controllers\HomeController($container->view);
};

// URL Routes
$app->get('/new', 'HomeController:index');

$app->get('/home', function ($request, $response) {
   return $this->view->render($response, 'home.plates');
});

$app->get('/first', function($request, $response) {
   return 'My first route';
});








// Below are a few more basic examples of routes to return or log simple strings.
$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("slim3mvc-Skeleton '/' route");

    // Render index view           verify filename -->
    return $this->renderer->render($response, 'index.php', $args);
});
