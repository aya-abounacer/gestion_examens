<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/layout', 'Home::index');

// $routes->get('/Signup', 'SignupController::index');
// $routes->post('/Signup', 'SignupController::store');
// In app/Config/Routes.php
$routes->get('/Signup', 'SignupController::index');  // For displaying the signup form
$routes->post('/Signup', 'SignupController::store'); // For handling the form submission


$routes->get('/', 'SignupController::index');


