<?php

/**
 * Front controller
 *
 * PHP version 7.0
 */

/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';


/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');


/**
 * Routing
 */
$router = new Core\Router();

// Add the routes

// Base route
$router->add('', ['controller' => 'Home', 'action' => 'index']);

// Route with parameter
$router->add('{num:\d+}', ['controller' => 'Home', 'action' => 'indexWithNum']);

// Route with model
$router->add('users', ['controller' => 'Home', 'action' => 'users']);
$router->add('users/{id:\d+}', ['controller' => 'Home', 'action' => 'usersWithId']);

$router->add('events', ['controller' => 'Home', 'action' => 'events']);
$router->add('events/{id:\d+}', ['controller' => 'Home', 'action' => 'eventsWithId']);

// JSON format
$router->add('users.json', ['controller' => 'Home', 'action' => 'usersJson']);
$router->add('users/{id:\d+}.json', ['controller' => 'Home', 'action' => 'usersWithIdJson']);

// Compose page client-side with JavaScript
$router->add('users2', ['controller' => 'Home', 'action' => 'usersJs']);

$router->add('{controller}/{action}');
    
$router->dispatch($_SERVER['QUERY_STRING']);
