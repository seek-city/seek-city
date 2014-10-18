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

Route::get('/', function()
{
	return View::make('sample');
});

/*
|--------------------------------------------------------------------------
| Resource Controller Routes
|--------------------------------------------------------------------------
*/
Route::resource('activities', 'ActivitiesController');
<<<<<<< HEAD

Route::resource('users', 'UsersController');
=======
>>>>>>> b6f2ca91da8095ab8fa04691eaf6f5ef2a013e4b
