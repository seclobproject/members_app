<?php

use CodeIgniter\Router\RouteCollection;
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('login','Login::index');
$routes->post('login/user','Login::user');
$routes->get('user/logout','Login::logout');
$routes->get('package','Package::index');
$routes->get('package/add','Package::add');
$routes->get('packages','Package::list');
$routes->post('package/save','Package::save');
$routes->get('member/add','Member::add');
$routes->get('members','Member::list');
$routes->post('member/save','Member::save');
$routes->get('member/profile','Member::profile');


//API
$routes->get('api', 'ApiController :: index');
$routes->resource('api', ['controller' => 'ApiController','only' => ['index','packages']]);