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
$routes->get('/mas_info', 'HomeController::mas_info');
$routes->get('/login', 'HomeController::login');
$routes->post('/login', 'LoginController::autenticar');
$routes->get('/registrar_usuario', 'HomeController::registrar_usuario');
$routes->post('/store_usuario', 'HomeController::storeUsuario');

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

$routes->group('', ['filter' => 'login'], static function (RouteCollection $routes) {
    $routes->get('/cliente/catalogo-actividades', 'ClienteController::verActividades');
    $routes->get('/cliente/catalogo-alojamientos', 'ClienteController::verAlojamientos');
    $routes->get('/cliente/detalle_actividad/(:num)', 'ClienteController::detalle_actividad/$1');
    $routes->get('/cliente/detalle_alojamiento/(:num)', 'ClienteController::detalle_alojamiento/$1');
    $routes->get('/cliente/historial-reservas', 'ClienteController::historial_reservas');
    $routes->post('/cliente/store_reserva', 'ClienteController::storeReserva');
    $routes->post('logout', 'LoginController::logout');
});