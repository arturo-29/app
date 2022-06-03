<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');
$routes->post('/login', 'Home::login');
$routes->get('/salir', 'Home::salir');

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
$routes->get('listarLibros', 'Libros::index');
$routes->get('agregarLibros', 'Libros::agregar');
$routes->post('guardarLibros', 'Libros::guardar');
$routes->get('borrarLibros/(:num)', 'Libros::borrar/$1');
$routes->get('editarLibros/(:num)', 'Libros::editar/$1');
$routes->post('actualizarLibros', 'Libros::actualizar');

$routes->get('listarLectores', 'Lectores::index');
$routes->get('agregarLectores', 'Lectores::agregar');
$routes->post('guardarLectores', 'Lectores::guardar');
$routes->get('borrarLectores/(:num)', 'Lectores::borrar/$1');
$routes->get('editarLectores/(:num)', 'Lectores::editar/$1');
$routes->post('actualizarLectores', 'Lectores::actualizar');

$routes->get('listarAlquileres', 'Alquileres::index');
$routes->get('agregarAlquileres', 'Alquileres::agregar');
$routes->post('guardarAlquileres', 'Alquileres::guardar');
$routes->get('borrarAlquileres/(:num)', 'Alquileres::borrar/$1');
$routes->get('editarAlquileres/(:num)', 'Alquileres::editar/$1');
$routes->post('actualizarAlquileres', 'Alquileres::actualizar');