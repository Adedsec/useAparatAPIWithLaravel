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


Route::get('/aparat', 'AparatController@index');
Route::get('/aparat/login', 'AparatController@login');
Route::post('/aparat/upload', 'AparatController@upload');
Route::get('/aparat/delete', 'AparatController@delete');
Route::get('aparat/show', 'AparatController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
