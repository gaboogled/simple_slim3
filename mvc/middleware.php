/**
 * MVC Application Middleware
 */

<?php
// i.e: $app->add(new \Slim\Csrf\Guard);

namespace MVC\Middleware;
use Psr7Middlewares\Utils;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

// Middleware Dispatcher for HTTPS protocol.
$dispatcher = new Dispatcher([
	(new Middlewares\Https())
		->includeSubdomains()
]);

$response = $dispatcher->dispatch(new ServerRequest());
