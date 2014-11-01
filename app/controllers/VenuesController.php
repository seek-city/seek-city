<?php

class VenuesController extends \BaseController {

    public function __construct()
    {
        parent::__construct();
        
        $this->beforeFilter('auth', array('except' => array('index','show')));
        $this->beforeFilter('author', array('on' => 'edit'));
    }


    /**
     * Display a listing of venues
     *
     * @return Response
     */
    public function index()
    {
        $venues = Venue::all();

        return View::make('venues.index', compact('venues'));
    }

    /**
     * Show the form for creating a new venue
     *
     * @return Response
     */
    public function create()
    {
        
        return View::make('venues.create');
    }

    /**
     * Store a newly created venue in storage.
     *
     * @return Response
     */
    public function store()
    {
        $venue = new Venue();
        if (Input::hasFile('image_path')) {
            $file = Input::file('image_path');
            $destination_path = public_path() . '/img-upload/';
            $filename = uniqid('img-venue') . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destination_path, $filename);
            $venue->image_path = '/img-upload/' . $filename;
        }
        return $this->saveVenue($venue);
    }

    /**
     * Display the specified venue.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $venue = Venue::findOrFail($id);

        return View::make('venues.show', compact('venue'));
    }

    /**
     * Show the form for editing the specified venue.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $venue = Venue::find($id);

        return View::make('venues.edit', compact('venue'));
    }

    /**
     * Update the specified venue in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $venue = Venue::findOrFail($id);

        return $this->saveVenue($venue);
    }

    /**
     * Remove the specified venue from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $venue = Venue::findOrFail($id);
        }
        catch (ModelNotFoundException $e) {
            App::abort(404);
        }

        $venue->delete();
        Log::info('Venue deleted successfully.');
        $message = "So long, $venue->name!";
        
        if (Request::ajax()) {
            return Response::json(array(
                'success' => true,
                'message' => $message
            ));
        }
        else {
            Session::flash('successMessage', $message);
            return Redirect::action('HomeController@index');
        }
    }

    public function saveVenue(Venue $venue)
    {
        $validator = Validator::make(Input::all(), Venue::$rules);

        if($validator->fails()) {
            Session::flash('errorMessage', 'Your venue is missing some required fields.');
            Log::error('Venues validator failed', Input::all());
            return Redirect::back()->withInput();
        } else {
            
            $venue->name = Input::get('name');
            $venue->address = Input::get('address');
            $venue->city = Input::get('city');
            $venue->state = Input::get('state');
            $venue->zipcode = Input::get('zipcode');
            $venue->zipcode = Input::get('phone_number');
            $venue->parking_available = Input::get('parking_available') == 'Yes' ? true : false;
            $venue->open_hour = Input::get('open_hour');
            $venue->close_hour = Input::get('close_hour');
            $venue->website_url = Input::get('website_url');
            $venue->facebook_url = Input::get('facebook_url');
            $venue->google_url = Input::get('google_url');
            $venue->twitter_handle = Input::get('twitter_handle');
            $venue->image_url = Input::get('image_url');
            $venue->save();
            $id = $venue->id;
            if (Session::has('activityId')) {
                $activity = Activity::findOrFail(Session::get('activityId'));
                $activity->venue_id = $id;
                $activity->save();
                return View::make('activities.show', compact('activity'));
            }
        }

    }
}
