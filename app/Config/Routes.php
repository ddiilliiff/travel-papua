<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/jasa_travel', 'Home::jasa_travel');

$routes->get('/login', 'Auth::index');

$routes->get('/contact', 'Home::contact');

$routes->get('/transaksi', 'Transaction::index');

$routes->get('/about_kabkot/(:alphanum)', 'Home::about_kabkot/$1');

$routes->get('/dashboard', 'Admin::index');

$routes->get('/admin/destination', 'Admin::destination');
$routes->post('/admin/destination', 'Admin::save_destination');
$routes->get('/admin/delete_destination/(:alphanum)', 'Admin::delete_destination/$1');

$routes->get('/admin/kabkot', 'Admin::kabkot');
$routes->post('/admin/kabkot', 'Admin::save_kabkot');
$routes->get('/admin/delete_kabkot/(:alphanum)', 'Admin::delete_kabkot/$1');
