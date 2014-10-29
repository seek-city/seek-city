<?php

class ActivitiesController extends \BaseController {

    /**
     * Display a listing of activities
     *
     * @return Response
     */
    public function index()
    {
        $query = DB::table('activities')->select('*');
        $activities = $query->orderBy('activity_date', 'ASC')->paginate(10);

        return View::make('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new activity
     *
     * @return Response
     */
    public function create()
    {
        // SHOW CREATE FORM FOR AUTHENTICATED USERS
        if (Auth::check()) {

            // PULL IN CATEGORIES AND MOODS FOR SELECT FIELDS
            $category_options = Category::lists('name', 'id');
            $mood_options = Mood::lists('name', 'id');
            $venues = Venue::lists('name', 'id');

            $data = ['category_options' => $category_options, 'mood_options' => $mood_options, 'venues' => $venues];

            return View::make('activities.create', $data);
        }
        // SEND NON-AUTHENTICATED USER TO ACTIVITIES INDEX
        return View::make('activities.index');

    }

    /**
     * Store a newly created activity in storage.
     *
     * @return Response
     */

    public function store()
    {
        $activity = new Activity();

        // CHECK IF AN IMAGE HAS BEEN SELECTED AND PREPARE FOR INSERT INTO DATABASE
        if (Input::hasFile('image_path')) {
            $file = Input::file('image_path');
            $destination_path = public_path() . '/img-upload/';
            $filename = uniqid('img') . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destination_path, $filename);
            $activity->image_path = '/img-upload/' . $filename;
        }
        return $this->saveActivity($activity);
    }

    /**
     * Display the specified activity.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        return View::make('activities.show', compact('activity'));
    }

    /**
     * Show the form for editing the specified activity.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // GRAB CURRENT ACTIVITY INFORMATION
        $activity = Activity::find($id);

        // SHOW EDIT FORM FOR AUTHENTICATED USERS
        if (Auth::check() && (Auth::id() == $activity->user->id)) {

            // PULL IN CATEGORIES AND MOODS FOR SELECT FIELDS
            $category_options = Category::lists('name', 'id');
            $mood_options = Mood::lists('name', 'id');
            $venues = Venue::lists('name', 'id');
            $data = ['activity' => $activity, 'category_options' => $category_options, 'mood_options' => $mood_options, 'venues' => $venues];
            return View::make('activities.edit', $data);
        }
        // SEND NON-AUTHENTICATED USERS TO ACTIVITIES INDEX
        return Redirect::to('/');
    }

    /**
     * Update the specified activity in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $activity = Activity::findOrFail($id);

        // CHECK IF NEW IMAGE HAS BEEN SELECTED AND PREPARE FOR DATABASE
        if (Input::hasFile('image_path')) {
            $old_image = public_path() . $activity->image_path;
            if (File::exists($old_image)) {
                File::delete($old_image);
            }

            $file = Input::file('image_path');
            $destination_path = public_path() . '/img-upload/';
            $filename = uniqid('img') . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destination_path, $filename);
            $activity->image_path = '/img-upload/' . $filename;
        }

        return $this->saveActivity($activity);
    }

    /**
     * Remove the specified activity from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $activity = Activity::findOrFail($id);
        }
        catch (ModelNotFoundException $e) {
            App::abort(404);
        }

        $old_image = public_path() . $activity->image_path;
        if (File::exists($old_image)) {
            File::delete($old_image);
        }

        $activity->delete(); 
        Log::info('Activity deleted successfully.');
        $message = "So long, $activity->title!";

        if (Request::ajax()) {
            return Response::json(array(
                'success' => true,
                'message' => $message
            ));
        }
        else {
            Session::flash('successMessage', $message);
            return Redirect::action('ActivitiesController@index');
        }
    }


public function saveActivity(Activity $activity)
    {
        $validator = Validator::make(Input::all(), Activity::$rules);

        if ($validator->fails()){
            Session::flash('errorMessage', 'Your activity needs a title and body');
            Log::error('Activities validator failed', Input::all());
            return Redirect::back()->withInput();

        } else {
            $activity->title = Input::get('title');
            $activity->body = Input::get('body');
            $activity->price = Input::get('price');
            $activity->activity_date = new Carbon(Input::get('activity_date'));

            $categories = Input::get('category_options');
            $moods = Input::get('mood_options');

            $activity->user_id = Auth::id();
            // $activity->venue_id = 0;
            $activity->save();
            $id = $activity->id;

            // ASSOCIATE ACTIVITY TO ITS CATEGORIES IN THE ACTIVITY_CATEGORY TABLE
            foreach ($categories as $categoryId) {
                $activity->categories()->attach($categoryId);
            }

            // ASSOCIATE ACTIVITY TO ITS MOODS IN THE ACTIVITY_MOOD TABLE
            foreach ($moods as $moodId) {
                $activity->moods()->attach($moodId);
            }

            if (Input::get('newVenue')) {
                Session::put('venueName',Input::get('venue'));
                Session::put('activityId', $id);
                $activity->venue_id = 0;
                
                return Redirect::action('VenuesController@create');
            }
            

            Log::info('Activity was sucessfully saved', Input::all());

            $message = 'Activity created sucessfully';
            Session::flash('successMessage', $message);
            return Redirect::action('ActivitiesController@show', $id);
        }
    }
}
