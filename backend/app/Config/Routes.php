<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'UserController::index');
$routes->get('/home', 'UserController::index');
$routes->get('/getData', 'UserController::getData');
$routes->get('/productview', 'UserController::productview');
$routes->get('/adminview', 'UserController::adminview');
$routes->get('/registerview', 'UserController::registerview');
$routes->post('/register', 'UserController::register');
$routes->get('/signin', 'UserController::Login');
$routes->post('/LoginAuth', 'UserController::LoginAuth');
$routes->post('/save', 'UserController::save');
$routes->get('/delete/(:any)', 'UserController::delete/$1');
$routes->get('/edit/(:any)', 'UserController::edit/$1');


