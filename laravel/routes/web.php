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

Route::get('/' , 'AnonymousController@index')->name('anonymous_top');
Route::get('/anonymousDetail/{id}' , 'AnonymousController@detail');


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::post('/savePost', 'HomeController@savePost');
Route::get('/detail/{id}' , 'HomeController@detail');
Route::post('/updatePost', 'HomeController@updatePost');
Route::get('/deletePost/{id}', 'HomeController@deletePost');

