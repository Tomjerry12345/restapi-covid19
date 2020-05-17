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


$router->get('/indonesia' , 'IndonesiaController@getIndonesia');
$router->post('/indonesia/set' , 'IndonesiaController@setIndonesia');
$router->post('/indonesia/{id}/update', 'IndonesiaController@updateIndonesia');
$router->post('/indonesia/{id}/delete', 'IndonesiaController@destroyIndonesia');

$router->get('/indonesia/{provinsi}' , 'ProvinsiController@getDataProvinsi');
$router->post('/indonesia/{provinsi}/set' , 'ProvinsiController@setDataProvinsi');
$router->post('/indonesia/{provinsi}/{id}/update' , 'ProvinsiController@updateDataProvinsi');
$router->post('/indonesia/{provinsi}/{id}/delete', 'ProvinsiController@destroyDataProvinsi');

$router->get('/indonesia/status/{status}' , 'StatusController@getStatus');
$router->post('/indonesia/status/{status}/set' , 'StatusController@setStatus');
$router->post('/indonesia/status/{status}/{id}/update' , 'StatusController@updateStatus');
$router->post('/indonesia/status/{status}/{id}/delete' , 'StatusController@destroyStatus');


