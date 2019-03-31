<?php
/* Entry point to the simple application */

require '_config/mvc_app_config.php';

//Slim is the Core Application. This is a simple MVC Base layer starting point.
//This MVC pipline is good for global funtionalities such as form validations etc.
include 'mvc/BaseDependencies.php';
include 'mvc/BaseModels.php';
include 'mvc/BaseViews.php';
include 'mvc/BaseController.php';
include 'mvc/BaseMiddleware.php';
include 'mvc/BaseRouter.php';

// Run app
$app->run();

//simple as that!
