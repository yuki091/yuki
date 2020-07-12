<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('top');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/mypage', 'ClothController');
// Route::put('/mypage/{id}', 'ClothController@update');
