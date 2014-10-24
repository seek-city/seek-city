<?php

class UsersController extends \BaseController {

    /**
     * Display a listing of users
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return View::make('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user
     *
     * @return Response
     */
    public function create()
    {
        return View::make('users.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @return Response
     */
    public function store()
    {
        $user = new User();
        if (Input::hasFile('image_path')) {
            $file = Input::file('image_path');
            $destination_path = public_path() . '/img-upload/';
            $filename = uniqid('user_img') . '_'. $file->getClientOriginalName();
            $uploadSuccess = $file->move($destination_path, $filename);
            $user->image_path = '/img-upload/' . $filename;
        }
        return $this->saveUser($user);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $user = User::findOrFail($id);

        return $this->saveUser($user);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return Redirect::route('users.index');
    }

    protected function saveUser(User $user)
    {
        $validator = Validator::make(Input::all(), User::$rules);
        
        if ($validator->fails()) {
            Session::flash('errorMessage', 'Your account could not be created. Please try again.');
            Log::error('User account validator failed', Input::all());
            return Redirect::back()->withInput();
        } else {
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->email = Input::get('email');
            $user->first_name = Input::get('first_name');
            $user->last_name = Input::get('last_name');
            
            $user->save();
            
            $id = $user->id;
            
            Log::info('User account was created.', Input::all());
            
            $message = 'User account created successfully. Welcome to Seek City.';
            Session::flash('successMessage', $message);
            
            return Redirect::action('HomeController@index');
        }
    }

}
