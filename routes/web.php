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
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookingController;

//AUTHORS

$router->get('/authors', 'AuthorController@index');
$router->get('/authors/{author}','AuthorController@show');

//BOOKINGS

$router->get('/bookings', 'BookingController@index');
$router->get('/bookings/{single_booking}', 'BookingController@show');

$router->post('/authors','AuthorController@store');
$router->post('/bookings','BookingController@store');

$router->put('/authors/{author}','AuthorController@update');
$router->patch('/authors/{author}','AuthorController@update');
$router->delete('/authors/{author}','AuthorController@destroy');
