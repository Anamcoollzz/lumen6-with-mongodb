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

use App\Services\LogService;

$router->get('/', function () use ($router) {
    // $client = new GuzzleHttp\Client();
    // try {
    //     $response = $client->request('GET', 'http://localhost:8001');
    //     return $response;
    // } catch (\Throwable $th) {
    //     return 'error';
    // }
    $log = new LogService;
    return $log->saveBatch([
        'logs'=>[
            'user_id'   => null,
            'action'    => 'create',
            'table'     => 'uji',
            'deskripsi' => 'uji',
            'before'    => null,
            'after'     => 'uji',
        ]
    ]);
    // return $router->app->version();
});
