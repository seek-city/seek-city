<?php

use Illuminate\Support\MessageBag;

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function index()
    {
        return View::make('index');
    }

    public function showLogin()
    {
        return View::make('login');
    }
    
    public function doLogin()
    {
        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        
        $errors = new MessageBag(['password' => 'Username and/or password was invalid. Please try again.']);
        
        if (Auth::attempt($credentials, true))
        {
            return Redirect::Intended('/');
        }
        else {
            return Redirect::back()->withInput()->withErrors($errors);
        }
    }
    
    public function doLogout()
    {
        Auth::logout();
        return Redirect::action('HomeController@index');
    }

}
