<?php
use Bramus\Router\Router;

// Require composer autoloader
require __DIR__ .  '/vendor/autoload.php';

// Create Router instance
$router = new Router;
$router->setNamespace('\App\Controller');

// Define routes
$router->get('/articles', 'ArticlesController@index');

$router->get('/medias', 'MediasController@index');

// Run it!
$router->run();
