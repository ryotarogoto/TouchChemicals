<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
));

$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
);
$view->parserDirectory = dirname(__FILE__) . '/templates';
$view->parserExtensions = array(
    new \Slim\Views\TwigExtension(),
);


$app->get('/', function () use ($view){
    $view->render(urlFor('hello'));
});

$app->run();
