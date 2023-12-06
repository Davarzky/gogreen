<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(true);
// Routes Halaman Web
$routes->get('/', 'Pages::index');
$routes->get('/layout/login', 'Pages::login');
$routes->post('/','Pages::data');
$routes->get('register','Pages::register');
// Routes Halaman Data Pengguna
$routes->get('pengguna/','UserController::index');
$routes->get('/pengguna/create','UserController::create');
$routes->post('pengguna/save', 'UserController::save');
$routes->get('pengguna/edit/(:num)/','UserController::edit/$1');
$routes->post('pengguna/edit/(:num)/','UserController::update/$1');
$routes->get('pengguna/delete/(:num)','UserController::delete/$1');
// Routes Halaman Contact
$routes->get('contact', 'ContactController::index');
$routes->get('contact/create','ContactController::create');
$routes->post('contact/save', 'ContactController::save');
$routes->get('contact/edit/(:num)/','ContactController::edit/$1');
$routes->post('contact/edit/(:num)/','ContactController::update/$1');
$routes->get('contact/delete/(:num)','ContactController::delete/$1');
// Routes Halaman Dashboard
$routes->get('dashboard', 'Dashboard::index');










