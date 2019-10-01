<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/webapps', function () {
    return view('webapps');
});

Route::get('/marketing', function () {
    return view('marketing');
});

Route::get('/podcasts', function () {
    return view('podcasts');
});

Route::get('/spots', function () {
    return view('spots');
});