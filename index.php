<?php
/* Entry point to Slim 3 MVC application */

require 'config.php';

require 'controller.php';
require 'router.php';

// Run app
$app->run();

//That's it!
