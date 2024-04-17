<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/planes', 'App\Http\Controllers\PlaneController@index');
