<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@about');
Route::get('/about', 'HomeController@about');
// Route::get('/services', 'HomeController@services');

Route::get('/services', 'ServiceController@index');
Route::post('/services', 'ServiceController@store');

// RESTfull
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');

