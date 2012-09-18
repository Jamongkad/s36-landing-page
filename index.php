<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => './views'
));

$app->get('/', function() use ($app) {
    $app->render('my_index.php'); 
});

$app->get('/hello/:name', function($name) use ($app) {
    echo "Hello, $name";
});

$app->run();
