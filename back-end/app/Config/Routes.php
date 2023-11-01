<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// Basic routes
$routes->get('/', 'HotelControllers\HomeController::index');
$routes->get('/about', 'HotelControllers\AboutController::index');
$routes->get('/contact', 'HotelControllers\ContactController::index');
$routes->get('/events', 'HotelControllers\EventsController::index');
$routes->get('/reservation', 'HotelControllers\ReservationController::index');
$routes->get('/rooms', 'HotelControllers\RoomsController::index');

// Grouped routes
$routes->group('/', function ($routes) {
    $routes->get('detail/(:num)', 'Home::detail/$1');
    $routes->get('item/(:any)', 'Home::hotel/$1');
    $routes->add('book/(:num)', 'Home::book/$1');
    $routes->add('book/process', 'Home::bookProcess');
    $routes->get('book/done/(:num)', 'Home::bookDone/$1');
    $routes->add('user/register', 'Home::registerProcess');
    $routes->add('user/login', 'Home::loginProcess');
    $routes->add('user/logout', 'Home::logoutProcess');
});

$routes->group('admin', function ($routes) {
    // Login
    $routes->get('login', 'Admin::login');
    $routes->post('loginProcess', 'Admin::loginProcess');
    $routes->get('logout', 'Admin::logoutProcess');

    // Customer
    $routes->get('customer/add', 'User::addUser');
    $routes->post('customer/addProcess', 'User::addProcessUser');
    $routes->get('customer/edit/(:num)', 'User::editUser/$1');
    $routes->post('customer/editProcess', 'User::editProcessUser');
    $routes->get('customer/delete/(:num)', 'User::deleteUser/$1');

    // Admin
    $routes->get('admin/add', 'User::addAdmin');
    $routes->post('admin/addProcess', 'User::addProcessAdmin');
    $routes->get('admin/edit/(:num)', 'User::editAdmin/$1');
    $routes->post('admin/editProcess', 'User::editProcessAdmin');
    $routes->get('admin/delete/(:num)', 'User::deleteAdmin/$1');

    // Hotel
    $routes->get('hotel/add', 'Hotel::add');
    $routes->post('hotel/addProcess', 'Hotel::addProcess');
    $routes->get('hotel/edit/(:num)', 'Hotel::edit/$1');
    $routes->post('hotel/editProcess', 'Hotel::editProcess');
    $routes->get('hotel/delete/(:num)', 'Hotel::deleteData/$1');

    // Hotel Image
    $routes->get('image/(:num)', 'Admin::image/$1');
    $routes->get('image/add/(:num)', 'Image::add/$1');
    $routes->post('image/addProcess', 'Image::addProcess');
    $routes->get('image/delete/(:num)', 'Image::deleteData/$1');

    // Booking
    $routes->get('booking/add', 'Booking::add');
    $routes->post('booking/addProcess', 'Booking::addProcess');
    $routes->get('booking/edit/(:num)', 'Booking::edit/$1');
    $routes->post('booking/editProcess', 'Booking::editProcess');
    $routes->get('booking/delete/(:num)', 'Booking::deleteData/$1');
    $routes->add('booking/(:num)/(:num)/pending', 'Booking::editStatusP/$1/$2');
    $routes->add('booking/(:num)/(:num)/ongoing', 'Booking::editStatusO/$1/$2');
    $routes->add('booking/(:num)/(:num)/done', 'Booking::editStatusD/$1/$2');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

return $routes;
