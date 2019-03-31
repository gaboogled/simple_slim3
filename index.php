<?php
/* Slim 3 is the Core Application. This is the entry point and a simple MVC Base
 layer to the simple home page (_templates/index.html).
Entry point to the simple application */

require '_config/mvc_app_config.php';

//This MVC pipline is good for global funtionalities such as form validations etc.
include 'mvc/BaseDependencies.php';
include 'mvc/BaseModels.php';
include 'mvc/BaseViews.php';
include 'mvc/BaseController.php';
include 'mvc/BaseMiddleware.php';
include 'mvc/BaseRouter.php';
include 'mvc/BaseTest.php'; // Can place Global test cases in BaseMiddleware

// Run app
$app->run();

//simple as that!
