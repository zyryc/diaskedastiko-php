<?php
// require UsersController;
// UsersController
define('UsersController', 'controllers/UsersController.php');
define('WelcomeController', 'controllers/WelcomeController.php');

// Use the router
$router = new Router();
$router->get('/user', UsersController, 'index');
$router->put('/user/{id}', UsersController, 'update');
$router->get('/',WelcomeController,'index');
$router->get('/news',WelcomeController,'news');
$router->get('/contact',WelcomeController,'contact');
$router->get('/about',WelcomeController,'about');

$router->run();