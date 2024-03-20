<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/asuransi', 'Home::property');

$routes->get('/contact', 'Home::contact');
$routes->post('/kirimEmail', 'Home::kirimEmail');

$routes->get('/about', 'Home::about');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::index');

$routes->get('/logout', 'Login::logout');

$routes->get('/verify', 'Login::verify');

$routes->get('/signup', 'Login::signup');

$routes->post('/signuping', 'Login::signuping');
$routes->post('/logining', 'Login::logining');
