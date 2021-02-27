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
    $data = [
        "status" => true,
        "message" => env('APP_NAME'),
        "version" => "v1.0.0",
    ];

    return response()->json($data, 200);
});

$router->get('/tahun-angkatan', 'Alumni\AlumniAngkatanController@GetSemuaAngakatan');
$router->post('/tahun-angkatan/store', 'Alumni\AlumniAngkatanController@StoreTahunAngkatan');
$router->put('/tahun-angkatan/update/:id', 'Alumni\AlumniAngkatanController@UpdateTahunAngkatan');
$router->delete('/tahun-angkatan/delete/:id', 'Alumni\AlumniAngkatanController@DeleteTahunAngkatan');
