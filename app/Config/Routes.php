<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// rutas inicio sesion vistas principales J.campos
$routes->get('/', 'Home::index');
$routes->get('/login', 'LoginController::login');
$routes->post('login/autenticar', 'LoginController::autenticar');
$routes->get('dashboard','DashboardController::index', ['filter' => 'auth']);
$routes->get('logout', 'LoginController::logout');
//rutas ingresos J.campos
$routes->get('ingresos','IngresosController::index');
$routes->get('egresos', 'EgresosController::index');
//rutas ubicaciones J.campos
$routes->get('ubicaciones','UbicacionesController::index');
$routes->post('ubicaciones/guardar','UbicacionesController::guardar');
$routes->get('ubicaciones/eliminar/(:num)', 'UbicacionesController::eliminar/$1');
//rutas para guardar J.Campos
$routes->post('ingresos/guardar', 'IngresosController::guardar');
$routes->get('ingresos/eliminar/(:num)', 'IngresosController::eliminar/$1');