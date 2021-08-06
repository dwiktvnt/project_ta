<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Page');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->add('/', 'Page::index');


$routes->add('/admin', 'Admin::index', ['filter' => 'role:admin,user']);
$routes->add('/admin/savejwb', 'Admin::savejwb', ['filter' => 'role:admin,user']);
$routes->add('/admin/rulePakar', 'Admin::rulePakar', ['filter' => 'role:admin,user']);
$routes->add('/admin/profile', 'Admin::profile', ['filter' => 'role:admin,user']);
$routes->add('/admin/createGejala', 'Admin::createGejala', ['filter' => 'role:admin,user']);
$routes->add('/admin/saveGejala', 'Admin::saveGejala', ['filter' => 'role:admin,user']);
$routes->add('/admin/dataGejala', 'Admin::dataGejala', ['filter' => 'role:admin,user']);
$routes->add('/admin/editGejala/(:num)', 'Admin::editGejala/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/updateGejala/(:num)', 'Admin::updateGejala/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/deleteGejala/(:num)', 'Admin::deleteGejala/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/dataPenyakit', 'Admin::dataPenyakit', ['filter' => 'role:admin']);
$routes->add('/admin/userList', 'Admin::userList', ['filter' => 'role:admin,user']);
$routes->add('/admin/riwayatDiagnosa', 'Admin::riwayatDiagnosa', ['filter' => 'role:admin,user']);
$routes->add('/admin/createPenyakit', 'Admin::createPenyakit', ['filter' => 'role:admin,user']);
$routes->add('/admin/editPenyakit/(:num)', 'Admin::editPenyakit/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/updatePenyakit/(:num)', 'Admin::updatePenyakit/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/deletePenyakit/(:num)', 'Admin::deletePenyakit/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/editRuleGejala/(:num)', 'Admin::editRuleGejala/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/updateRuleGejala/(:num)', 'Admin::updateRuleGejala/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/hasil/(:alphanum)', 'Admin::hasil/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/editProfile/(:num)', 'Admin::editProfile/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/updateProfile/(:num)', 'Admin::updateProfile/$1', ['filter' => 'role:admin,user']);
$routes->add('/admin/riwayat', 'Admin::riwayat', ['filter' => 'role:admin']);
$routes->add('/admin/savePenyakit', 'Admin::savePenyakit', ['filter' => 'role:admin']);


$routes->add('/admin/(:any)', 'Admin::index/$1', ['filter' => 'role:admin,user']);


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
