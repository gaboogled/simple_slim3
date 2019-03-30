<?php




// View Routes

// Render template in route
$app->get('/', function ($request, $response) {
    return $this->view->render($response, 'index.html');
});

// Render PHP template in route
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');
