<?php
/* Require Composer autoloader. Initialize Slim with error display set TRUE. */
session_start();
require __DIR__ . '/../vendor/autoload.php';
$mvc = new \Slim\App([
'settings' => [

       // Uncomment the line below, and Comment the TRUE statement line for
       // production applications.
       // 'displayErrorDetails' => false,
       'displayErrorDetails' => true,
]
]);

// Instantiate the MVC Application
$config = require __DIR__ . '/../mvc/config_my_mvc.php';
$mvc = new \Slim\App($config);

// Register Slim 3 Dependencies
require __DIR__ . '/../mvc/dependencies.php';
// Register Slim 3 Controllers
require __DIR__ . '/../mvc/controllers.php';
// Register Slim 3 Middleware
require __DIR__ . '/../mvc/middleware.php';
// Register Slim 3 Routes
require __DIR__ . '/../mvc/routes.php';

// UPDATE for Plates PHP: Create an extension to generate URLs for different
// routes.
   $view->addExtension(new \Slim\Views\TwigExtension(
       $container->router,
       $container->request->getUri()
   ));

   return $view;

// Start the Application
$mvc->run();
