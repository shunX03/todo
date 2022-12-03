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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'TodoFormController@index');
Route::get('/create-page', 'TodoFormController@createPage');
Route::post('/create', 'TodoFormController@create');
Route::get('/edit-page/{id}', 'TodoFormController@editPage');
Route::post('/edit', 'TodoFormController@edit');
Auth::routes();

