<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/map', 'Home::map');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/registration', 'Add::addStaff');
$routes->get('/addVendors', 'Add::addVendors');

$routes->get('/update_ticket', 'Add::editTicket');
$routes->get('/staff', 'Dashboard::staffVendors');
$routes->get('/tickets', 'Dashboard::tickets');
$routes->get('/billing', 'Dashboard::billing');

$routes->get('/dashboardStaff', 'Dashboard::dashboardStaff');
$routes->get('/events', 'Dashboard::events');
$routes->get('/activity', 'Dashboard::activityLog');
$routes->get('/scanner', 'ticketScanner::scanner');
$routes->get('/scannerStaff', 'ticketScanner::scannerStaff');

$routes->get('/edit/(:num)', 'Dashboard::edit/$1');


$routes->post('/update/(:num)', 'Dashboard::update/$1');

$routes->get('/editVendor/(:num)', 'Dashboard::editVendor/$1');
$routes->post('/updateVendor/(:num)', 'Dashboard::updateVendor/$1');

$routes->get('/billingVendor/(:num)', 'Dashboard::billingVendor/$1');
$routes->post('/billingVendor/(:num)', 'Dashboard::print/$1');

$routes->get('/ticket/(:num)', 'Dashboard::ticket/$1');
$routes->post('/editTicket/(:num)', 'Dashboard::editTicket/$1');

$routes->get('/delete/(:num)', 'Dashboard::delete/$1');
$routes->get('/deleteVendor/(:num)', 'Dashboard::deleteVendor/$1');
$routes->get('/deleteLog/(:num)', 'ActivityLogController::deleteLog/$1');



    $routes->post('/authenticate', 'LoginController::authenticate'); // Handle admin login form submission
    $routes->post('/signin', 'LoginController::signin'); // Handle staff login form submission



$routes->post('/staff/add', 'Dashboard::store');

$routes->post('/vendor/add', 'Dashboard::addVendor');

$routes->post('/login', 'AuthController::login');
$routes->post('/logout', 'AuthController::logout');
$routes->get('/activity-log', 'ActivityLogController::index');
