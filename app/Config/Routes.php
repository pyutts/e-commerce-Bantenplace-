<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('login','Login::Masuk');

$routes->get('register','Register::Daftar');

// Routes Get View Ke admin dashboard
$routes->get('home-dashboard','Dashboard::admin');