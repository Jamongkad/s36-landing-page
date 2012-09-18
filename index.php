<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => './views'
  , 'mode' => 'development'
));

$app->get('/', function() use ($app) {
    $req = $app->request();
    $param = $req->get();
    $app->render('my_index.php', array('id' => 'mathew')); 
});

$app->post('/add_email', function() use ($app) { 
    $req = $app->request();
    $param = $req->post();
    print_r($param); 
});

$app->run();
