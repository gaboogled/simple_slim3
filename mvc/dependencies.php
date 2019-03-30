<?php

// DI Configurations  (shameerc/slim3-aura-di)
// Get container
$container = $app->getContainer();

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

// -----------------------------------------------------------------------------
// Service providers
// -----------------------------------------------------------------------------

/* Twig
$container['view'] = function ($c) {
    $settings = $c->get('settings');
    $view = new Slim\Views\Twig($settings['view']['template_path'], $settings['view']['twig']);
    // Add extensions
    $view->addExtension(new Slim\Views\TwigExtension($c->get('router'), $c->get('request')->getUri()));
    $view->addExtension(new Twig_Extension_Debug());
    return $view;
};

// Flash messages
$container['flash'] = function ($c) {
    return new Slim\Flash\Messages;
};

// -----------------------------------------------------------------------------
// Service factories
// -----------------------------------------------------------------------------
// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings');
    $logger = new Monolog\Logger($settings['logger']['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['logger']['path'], Monolog\Logger::DEBUG));
    return $logger;
}; */

// -----------------------------------------------------------------------------
// Action factories
// -----------------------------------------------------------------------------
