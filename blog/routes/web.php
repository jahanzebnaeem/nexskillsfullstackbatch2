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

Route::get('/', function () {
    $welcomeMsg = 'Welcome to the class of Full Stack Batch 2';
    return view('welcome', compact('welcomeMsg'));
});

Route::get('/test', function(){
    return 'Welcome to the class';
});
