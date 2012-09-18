<?php

require 'libs/redis.php';
require 'vendor/autoload.php';

$redis = new redisent\Redis;

$app = new \Slim\Slim(array(
    'templates.path' => './views'
  , 'mode' => 'development'
));

$app->get('/', function() use ($app, $redis) {
    $req = $app->request();
    $param = $req->get();
    $app->render('my_index.php', array('id' => 'mathew')); 
});

$app->post('/add_email', function() use ($app, $redis) { 
    $req = $app->request();
    $param = $req->post();

    $key = 's36-landing-page:emails';
    $redis->sadd($key, $param['sender_email']);
    echo "success";
});

$app->run();
