<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout-manually', function () {
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
