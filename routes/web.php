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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Админка
Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function() {
	Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});

// блог
Route::get('/blog', 'PostsController@index')->name('home');
Route::get('/blog/{id}.html', 'PostsController@article');
// Route::get('/category', 'CategoryController@category');