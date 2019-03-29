<?php
// DI Configurations based on shameerc/slim3-aura-di

// CONNECT: Create a Slim 3 Views Container to know where the views are located while
// allowing then to return whenever needed.
$container = $mvc->getContainer();
$container['view'] = function ($container) {

   // CONNECT: Plates PHP Template engine to replicate MVC Views
   // (view_fileName.plate and tmpl_templateName.plate) in Slim 3.
   // Replace with choice of PHP Template Enginge.
   $view = new \Slim\Views\Twig(__DIR__ . '/../views', [
       'cache' => false,
   ]);

// CONNECT: Slim 3 Views container that pass 'HomeController' from app.php to
// this Controller.
$container['HomeController'] = function ($container) {
  return new \MVC\Controllers\HomeController($container->view);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};
