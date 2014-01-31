<?php
require 'vendor/autoload.php';

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$app->get('/hello/:name', function ($name) {
    echo "hello, $name";
});

$app->run();
