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
    // $client = new GuzzleHttp\Client();
    // try {
    //     $response = $client->request('GET', 'http://localhost:8001');
    //     return $response;
    // } catch (\Throwable $th) {
    //     return 'error';
    // }
    return $router->app->version();
});
