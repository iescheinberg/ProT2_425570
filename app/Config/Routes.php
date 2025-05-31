<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('registro', 'Home::registro');
$routes->get('productos', 'Home::productos');
$routes->get('login', 'Home::login');
