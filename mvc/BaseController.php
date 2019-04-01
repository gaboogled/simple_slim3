<?php
/**
* simple Slim 3 MVC Framework (https://github.com/gaboogled/simple)
*
* @link      https://github.com/gaboogled/simple
* @copyright Copyright (c) 2019 George Freeney-Jones
* @license   (MIT License) https://github.com/gaboogled/simple/blob/master/LICENSE/
*/
// Purpose: simple Base (global) Controller. Check applications folder individual app Controllers.

// Register PHP-View component to Slim 3 container (Others unsucessful so far)
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('./_assets/_templates/');
};
