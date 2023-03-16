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
    //return \App\Models\Product::all();
    //return \App\Models\Request::all();
    return 'Ornatus - API - Produtos e Pedidos';
});


$router->group(['prefix' => 'products'], function() use($router){
    $router->get('/', 'ProductController@index');
});

$router->group(['prefix' => 'requests'], function() use($router){
    $router->get('/', 'RequestController@index');
});