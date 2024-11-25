<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

// login
$routes->get('/login', 'Auth::login');
$routes->post('/auth/attemptLogin', 'Auth::attemptLogin');
$routes->get('/register', 'Auth::register');
$routes->post('/auth/attemptRegister', 'Auth::attemptRegister');
$routes->get('/logout', 'Auth::logout');

// dashboard dan landing-page 
$routes->get('/admin/home-dashbord', 'AdminController::dashboard', ['filter' => 'role:admin']);
$routes->get('/user/home-landing', 'UserController::landingPage', ['filter' => 'role:user']);
