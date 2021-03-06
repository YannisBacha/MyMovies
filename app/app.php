<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Silex\Provider\FormServiceProvider;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

// Register services.
$app['dao.category'] = $app->share(function ($app) {
    return new MyMovies\DAO\CategoryDAO($app['db']);
});
$app['dao.movie'] = $app->share(function ($app) {
    return new MyMovies\DAO\MovieDAO($app['db']);
});