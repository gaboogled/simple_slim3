<?php
/* Entry point to Slim 3 MVC application */

require '_config/mvc_app_config.php';

include 'mvc/BaseDependencies.php';
include 'mvc/BaseController.php';
include 'mvc/BaseMiddleware.php';
include 'mvc/BaseRouter.php';
include 'mvc/BaseViews.php';

// Run app
$app->run();

//That's it!
