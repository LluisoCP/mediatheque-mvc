<?php
use Bramus\Router\Router;

// Require composer autoloader
require __DIR__ .  '/vendor/autoload.php';

// Create Router instance
$router = new Router;

// Define routes
$router->get('/hello', function() {
    echo "Hello world";
});

$router->get('/article/{id}', function($id) {
    echo "Voici l'article #" . $id;
});

// Run it!
$router->run();
