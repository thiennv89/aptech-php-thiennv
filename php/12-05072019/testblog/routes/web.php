<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('admin/home', function () {
//     return view('admin.home');
// });

Route::group(['namespace' => 'Admin'], function () {
    Route::get('admin/home', 'HomeController@index')->name('admin.home');
    Route::resource('admin/post', 'PostController');
    Route::resource('admin/tag', 'TagController');
    Route::resource('admin/category', 'CategoryController');
});

