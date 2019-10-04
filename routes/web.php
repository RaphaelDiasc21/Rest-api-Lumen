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
    return "sas";
});

$router->post("/api","CarsController@store");
$router->get("/api","CarsController@getAll");
$router->get("/api/{id}","CarsController@getCar");
$router->put("/api/{id}","CarsController@update");
$router->delete("/api/{id}","CarsController@destroy");