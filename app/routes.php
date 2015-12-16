<?php

use Symfony\Component\HttpFoundation\Request;
// Home page
$app->get('/', function () use ($app) {
    $movies = $app['dao.movie']->findAll();
    return $app['twig']->render('index.html.twig', array('movies'=>$movies));
})->bind('home');

// Affichage du profil d'un animals
$app->get('/movie/{id}', function($id) use ($app) {
    $movie = $app['dao.movie']->find($id);
    return $app['twig']->render('movie.html.twig', array('movie'=>$movie));
})->bind('movie');

$app->get('/add', function () use ($app) {
    return $app['twig']->render('ajouter.html.twig');
})->bind('ajout');