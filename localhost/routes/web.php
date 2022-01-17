<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('api/zxc', 'ZxcController@showAll');
$router->post('api/zxc/add', 'ZxcController@add');
$router->post('api/zxc/edit/{zxc_id}', 'ZxcController@edit');
$router->delete('api/zxc/delete/{zxc_id}', 'ZxcController@delete');
