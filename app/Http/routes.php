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
    return view('main');
});

Route::get('/user/{id}', 'UserCtrl@show');
Route::get('/register', 'UserCtrl@create');
Route::post('/user', 'UserCtrl@store');
Route::get('/login', 'UserCtrl@login');
Route::post('/auth', 'UserCtrl@authenticate');
Route::get('/logout', 'UserCtrl@logout');

Route::post('/upload', 'ListingCtrl@upload');


// Route::get('/userpage/{name}', 'UserCtrl@userpage');
// Route::post('/userpage/{name}', 'UserCtrl@userpage');

