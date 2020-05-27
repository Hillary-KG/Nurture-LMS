<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    Route::post('registerStudent', 'AuthController@registerStudent');
    Route::post('registerTutor', 'AuthController@registerTutor');
    Route::post('registerAdmin', 'AuthController@registerAdmin');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'course'
], function () {
    Route::post('create', 'CourseController@createCourse');
    Route::put('update/{id}', 'CourseController@update');
    Route::get('index', 'CourseController@getAll');
    Route::get('getOne/{id}', 'CourseController@getOne');
    Route::delete('delete/{id}', 'CourseController@getOne');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'courseCategory'
], function () {
    Route::post('create', 'CourseCategoryController@createCategory');
    Route::put('update/{id}', 'CourseCategoryController@update');
    Route::get('index', 'CourseCategoryController@getAll');
    Route::get('getOne/{id}', 'CourseCategoryController@getOne');
    Route::delete('delete/{id}', 'CourseCategoryController@getOne');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'enroll'
], function () {
    Route::post('create', 'CourseCategoryController@addEnrollment');
    Route::put('update/{id}', 'CourseCategoryController@update');
    Route::get('index', 'CourseCategoryController@getAll');
    Route::get('getOne/{id}', 'CourseCategoryController@getOne');
    Route::delete('delete/{id}', 'CourseCategoryController@getOne');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
