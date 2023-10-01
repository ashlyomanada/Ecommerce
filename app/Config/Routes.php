<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'UserController::index');
$routes->get('/website', 'UserController::website');
$routes->get('/adminDashboard', 'AdminController::adminDashboard');
$routes->post('/save', 'AdminController::save');
$routes->post('/saveNewPro', 'AdminController::saveNewPro');
$routes->get('/edit/(:any)', 'AdminController::edit/$1)' );
$routes->get('/editNewPro/(:any)', 'AdminController::editNewPro/$1)' );
$routes->get('/delete/(:any)', 'AdminController::delete/$1)' );
$routes->get('/deleteNewPro/(:any)', 'AdminController::deleteNewPro/$1)' );
$routes->get('/products', 'AdminController::goToProducts' );
$routes->get('/register', 'UserController::register');
$routes->post('/registration', 'UserController::register');
$routes->get('/login', 'UserController::loginAuth',['filter' => 'authGuard']);
$routes->post('/loginAuth', 'UserController::loginAuth');
$routes->get('/admin', 'AdminController::admin');
$routes->post('/loginAdmin', 'AdminController::loginAuth');