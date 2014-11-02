<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::get('/user/{username}', array(
    'as' => 'profile-user',
    'uses' => 'ProfileController@user'
));

// MANAGE CATEGORIES
Route::get('/categories/manage', 'CategoriesController@manage');

// MANAGE MOODS
Route::get('/moods/manage', 'MoodsController@manage');

// Confide RESTful route
Route::get('users/confirm/{code}', 'UsersController@getConfirm');
Route::get('users/reset_password/{token}', 'UsersController@getReset');
Route::get('users/reset_password', 'UsersController@postReset');
Route::controller( 'users', 'UsersController');

//oauth routes
Route::get('login-facebook', 'AuthController@loginWithFacebook');
Route::post('login-facebook', 'AuthController@loginWithFacebook');

Route::get('/login-google', 'AuthController@loginWithGoogle');
Route::post('/login-google', 'AuthController@loginWithGoogle');

Route::get('isLiked', array('as' => 'isLiked', 'uses' => 'ActivitiesController@isLiked'));
Route::post('like', array('as' => 'like', 'uses' => 'ActivitiesController@like'));
Route::post('unlike', array('as' => 'unlike', 'uses' => 'ActivitiesController@unlike'));

/*
|--------------------------------------------------------------------------
| Resource Controller Routes
|--------------------------------------------------------------------------
*/
Route::resource('activities', 'ActivitiesController');

Route::resource('venues', 'VenuesController');

Route::resource('categories', 'CategoriesController');

Route::resource('moods', 'MoodsController');
