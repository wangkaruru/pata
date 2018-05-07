<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@services');
Route::get('/portfolio', 'HomeController@portfolio');
Route::get('/contact', 'HomeController@contact');
Route::get('/howitworks', 'HomeController@howitworks');
