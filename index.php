<?php
/**
 * simple Slim 3 MVC Framework (https://github.com/gaboogled/simple)
 *
 * @link      https://github.com/slimphp/Slim
 * @copyright Copyright (c) 2019 George Freeney-Jones
 * @license   https://github.com/gaboogled/simple/blob/master/LICENSE/ (MIT License)
 */


/* Slim 3 is the Core Application. This is the entry point and a simple MVC Base layer to the simple home page (_templates/index.html). */

require '_config/mvc_app_config.php'; // Defalt simple Application settings.
//------- Nothing below this. Apps will connect in BaseRouter.php ------------//
//       ⇣
//------------------------- Core MVC Pipeline --------------------------------//
include 'mvc/BaseDependencies.php';
include 'mvc/BaseModels.php';
include 'mvc/BaseViews.php';
include 'mvc/BaseController.php';
include 'mvc/BaseMiddleware.php';
include 'mvc/BaseRouter.php';
include 'mvc/BaseTest.php';
//----------------------------------------------------------------------------//
//       ⇣
//--------- Nothing else below this line, it's simple as that! ---------------//
$app->run();
