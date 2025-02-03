<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wall', 'App\Http\Controllers\WallController@index');

Route::get('/student', 'App\Http\Controllers\StudentController@index');