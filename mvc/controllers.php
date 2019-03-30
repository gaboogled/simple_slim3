<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

namespace MVC\Controllers;
class mvcController
{
   protected $container;
   public function __construct($container){
       $this->container = $container;
   }
 }

 // Get container
 $container = $app->getContainer();

 // Register component on container
 $container['view'] = function ($container) {
     return new \Slim\Views\PhpRenderer('./mvc/views/_templates/');
 };
