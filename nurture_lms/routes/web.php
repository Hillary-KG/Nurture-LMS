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
Route::get('courses', 'WebUIController@courses')->name('courses');
Route::get('course/{id}', 'WebUIController@course')->name('course');
Route::get('tutors', 'WebUIController@tutors')->name('tutors');
Route::get('about', 'WebUIController@about')->name('about');
Route::get('contact', 'WebUIController@contact')->name('contact');
Route::get('admin', 'WebUIController@adminDash')->name('admin');
Route::get('student', 'WebUIController@studentDash')->name('student');
Route::get('tutor', 'WebUIController@tutorDash')->name('tutor');
