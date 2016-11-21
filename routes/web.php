<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/kantoren', function () {
    return view('kantoren');
});
Route::post('contact/post', 'HomeController@mail');

Auth::routes();

Route::get('/home', 'HomeController@index');
