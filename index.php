<?php
use Bramus\Router\Router;

// Require composer autoloader
require __DIR__ .  '/vendor/autoload.php';

// Create Router instance
$router = new Router;
$router->setNamespace('\App\Controller');

// Define routes
$router->get('/types', 'TypesController@index');

$router->get('/type/{id}','TypesController@show');


$router->get('/medias', 'MediasController@index');

$router->get('/media/{id}', 'MediasController@show');


$router->get('/users', 'UserController@index');

$router->get('/user/{id}', 'UserController@show');

// Run it!
$router->run();
