<?php

// USING PHP-VIEW
// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('./_assets/_templates/');
};
