<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');



//$routes->group('api', function($routes) {
$routes->group('api', ['filter' => 'tokenauth'], function($routes) {
    $routes->get('customers', 'Api\CustomerAPI::index');
    $routes->get('customers/(:num)', 'Api\CustomerAPI::show/$1');
});

