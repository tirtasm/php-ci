<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/movies/create', 'movies::create');
$routes->get('/movies/edit/(:segment)', 'movies::edit/$1');
$routes->get('/movies/(:any)', 'movies::detail/$1');
$routes->delete('/movies/(:num)', 'movies::delete/$1');
// $routes->get('/movies/save', 'movies::save');
$routes->setAutoRoute(true); 

