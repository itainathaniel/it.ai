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

// Route::view('/', 'static.index');
Route::view('/', 'index');
Route::view('/zom', 'static.zom');
Route::view('/pikadon', 'static.pikadon');

// Wink
// Route::group(['prefix' => 'blog'], function() {
// 	Route::get('/', 'BlogController@index')->name('blog.index');
// 	Route::get('page/{slug}', 'BlogController@page')->name('blog.page');
// 	// Route::get('tag/{slug}', 'BlogController@tag')->name('blog.tag');
// 	// Route::get('author/{slug}', 'BlogController@author')->name('blog.author');
// 	Route::get('{year}/{month}/{slug}', 'BlogController@post')
// 		->where(['year' => '[0-9]{4}', 'month' => '[0-9]{2}'])
// 		->name('blog.post');
// });

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@index')->name('blog.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
