<?php

use Illuminate\Support\Facades\Route;

// User routes
Route::group(['namespace'=>'User'], function(){

    Route::get('/','HomeController@index');

    Route::get('post','PostController@index')->name('post');
});


// Admin routes
Route::group(['namespace'=>'Admin'], function(){

    Route::get('admin/home','HomeController@index')->name('admin.home');

    // User routes
    Route::resource('admin/user','UserController');

    // Post routes
    Route::resource('admin/post','PostController');

    // Tag routes
    Route::resource('admin/tag','TagController');

    // Category routes
    Route::resource('admin/category','CategoryController');

});

