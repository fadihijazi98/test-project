<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    dd("hello world");
    return view('welcome');
});


Route::get('/about', function () {
    dd("just about . . . ");
});
