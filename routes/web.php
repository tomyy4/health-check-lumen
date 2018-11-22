<?php

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



//List all reports
$router->get('logs/index','LogController@index');
//Creates new report
$router->post('logs/add','LogController@store');
//Shows report filtered by id
$router->get('logs/show/{id}','LogController@show');
	