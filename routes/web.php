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

// Library untuk menggunakan fungsi string
use Illuminate\Support\Str;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Generate App Key menggunakan library Illuminate\Support\Str lumen 7.1.2
$router->get('/key', function () {
    $randomString = Str::random(32);
    return $randomString;
});
