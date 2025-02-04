<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wall', 'App\Http\Controllers\WallController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@index');

Route::get('/login', 'App\Http\Controllers\LoginController@index');

Route::get('/inventory', 'App\Http\Controllers\InventoryController@index');