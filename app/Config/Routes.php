<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->setAutoRoute(false);

$routes->get('/', 'HomeController::index');
$routes->get('/cont_sociocultural', 'HomeController::contexto_sc');
$routes->get('/gastronomia_actividades', 'HomeController::catalogo');
$routes->get('/geografia', 'HomeController::zona_geo');
$routes->get('/lugares_historicos', 'HomeController::lugares_imp');
$routes->get('/info_turista', 'HomeController::info_practica');

$routes->group('', ['filter' => 'login'], static function (RouteCollection $routes) {
    $routes->get('/admin/gestion_activid_alojam', 'AdminController::gestion_actividades_alojamiento');
    $routes->get('/admin/consulta_reservas', 'AdminController::consulta_reservas');
    $routes->get('/admin/consulta_usuarios', 'AdminController::consulta_usuarios');
    $routes->get('/admin/crear_alojamiento', 'AdminController::createAlojamiento');
    $routes->get('/admin/crear_actividad', 'AdminController::createActividad');
    $routes->get('/admin/editar_alojamiento/(:num)', 'AdminController::editAlojamiento/$1');
    $routes->get('/admin/editar_actividad/(:num)', 'AdminController::editActividad/$1');
    $routes->post('/admin/update_alojamiento/(:num)', 'AdminController::updateAlojamiento/$1');
    $routes->post('/admin/update_actividad/(:num)', 'AdminController::updateActividad/$1');
    $routes->post('/admin/store_alojamiento', 'AdminController::storeAlojamiento');
    $routes->post('/admin/store_actividad', 'AdminController::storeActividad');
    $routes->post('/admin/delete_alojamiento/(:num)', 'AdminController::deleteAlojamiento/$1');
    $routes->post('/admin/delete_actividad/(:num)', 'AdminController::deleteActividad/$1');
    $routes->post('logout', 'LoginController::logout');
});
