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
Route::get('blog', 'BlogController@index');
