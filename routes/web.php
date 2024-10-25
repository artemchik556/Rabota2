<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exem', function () {
    return view('test.test');
});

Route::get('/exems', function () {
    return view('test.zacas');
});