<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('registro', 'usuario_controller::create');
$routes->post('registro/guardar', 'usuario_controller::formValidation');
$routes->get('productos', 'Home::productos');
$routes->get('login', 'Home::login');
$routes->get('nosotros', 'Home::nosotros');
$routes->post('login/verificar', 'usuario_controller::verificar');
$routes->get('logout', 'usuario_controller::logout');

