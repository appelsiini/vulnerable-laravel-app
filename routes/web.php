<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/my-profile', 'ProfileController@showProfilePage')->name('my-profile');
