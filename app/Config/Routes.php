<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
$routes->get('/', 'Pages::index');
$routes->get('/layout/login', 'Pages::login');
$routes->post('/','Pages::data');
$routes->get('/pengguna/create','UserController::create');
$routes->post('pengguna/save', 'UserController::save');
$routes->get('dashboard', 'Dashboard::index');
$routes->delete('pengguna/delete/(:num)', 'UserController::delete/$1');





