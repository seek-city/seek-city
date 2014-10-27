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

// DISPLAY LOGIN FORM
Route::get('/login', 'HomeController@showLogin');

// LOG USER IN
Route::post('/login', 'HomeController@doLogin');

// LOG USER OUT
Route::get('/logout', 'HomeController@doLogout');

// MANAGE CATEGORIES
Route::get('/categories/manage', 'CategoriesController@manage');

// MANAGE MOODS
Route::get('/moods/manage', 'MoodsController@manage');

//OAUTH 
Route::get('/login/facebook', 'AuthController@login');


/*
|--------------------------------------------------------------------------
| Resource Controller Routes
|--------------------------------------------------------------------------
*/
Route::resource('activities', 'ActivitiesController');

Route::resource('users', 'UsersController');

Route::resource('venues', 'VenuesController');

Route::resource('categories', 'CategoriesController');

Route::resource('moods', 'MoodsController');








