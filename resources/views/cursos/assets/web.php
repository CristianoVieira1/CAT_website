<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebController@home')->name('home');
Route::get('/sobre', 'WebController@about')->name('about');
Route::get('/awards', 'WebController@awards')->name('awards');
Route::get('/curso', 'WebController@course')->name('course');
Route::get('/contato', 'WebController@contact')->name('contact');

