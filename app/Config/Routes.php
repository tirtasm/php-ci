<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/movies/(:segment)', 'movies::detail/$1');
$routes->setAutoRoute(true);

