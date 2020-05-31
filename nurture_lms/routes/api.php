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

    // 'middleware' => 'api',
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
    Route::delete('delete/{id}', 'CourseController@delete');
    Route::get('search', 'CourseController@search');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'courseCategory'
], function () {
    Route::post('create', 'CourseCategoryController@createCategory');
    Route::put('update/{id}', 'CourseCategoryController@update');
    Route::get('index', 'CourseCategoryController@getAll');
    Route::get('getOne/{id}', 'CourseCategoryController@getOne');
    Route::delete('delete/{id}', 'CourseCategoryController@delete');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'enroll'
], function () {
    Route::post('create', 'EnrollmentController@addEnrollment');
    Route::put('update/{id}', 'EnrollmentController@update');
    Route::get('index', 'EnrollmentController@getAll');
    Route::get('getOne/{id}', 'EnrollmentController@getOne');
    Route::delete('delete/{id}', 'EnrollmentController@delete');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'purchases'
], function () {
    Route::post('create', 'CoursePurchaseController@store');
    Route::put('update/{id}', 'CoursePurchaseController@update');
    Route::get('index', 'CoursePurchaseController@index');
    Route::get('getOne/{id}', 'CoursePurchaseController@show');
    Route::delete('delete/{id}', 'CoursePurchaseController@destroy');
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'reviews'
], function () {
    Route::post('add', 'ReviewsController@store');
});




// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
