<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../views',
));

$view = $app['twig'];

$app->get('/', function() use($view) {
    return $view->render('hello.twig');
});

$app->run();
