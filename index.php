<?php
/* Entry point to Slim 3 MVC application */

require '_config.php';

include 'mvc/dependencies.php';
include 'mvc/controller.php';
include 'mvc/middleware.php';
include 'mvc/router.php';
include 'mvc/views.php';

// Run app
$app->run();

//That's it!
