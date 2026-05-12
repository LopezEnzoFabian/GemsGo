<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/', 'ProductoController::index');

$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('/productos', 'ProductoController::index');

$routes->post('/compra/realizar', 'CompraController::realizarCompra');

$routes->post('compra/formulario', 'CompraController::formulario');
