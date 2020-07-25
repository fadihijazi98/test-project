<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    dd("hello world");
    return view('welcome');
});


Route::get('/about', function () {
    dd("just about . . . ");
});

Route::get('/taem', function () {
   return "team work";
});

Route::get('/toGitHup', function () {
    return "to githup ...";
});
