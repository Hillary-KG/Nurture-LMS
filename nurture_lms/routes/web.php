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

Route::get('', 'WebUIController@home');
Route::get('registerStudent', 'WebUIController@registerStudent');
Route::get('registerAdmin', 'WebUIController@registerAdmin');
Route::get('registerTutor', 'WebUIController@registerTutor');
Route::get('login', 'WebUIController@login')->name('login');
