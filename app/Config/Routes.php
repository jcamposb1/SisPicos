<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::login');
$routes->post('login/autenticar', 'LoginController::autenticar');
$routes->get('dashboard','DashboardController::index', ['filter' => 'auth']);
$routes->get('logout', 'LoginController::logout');