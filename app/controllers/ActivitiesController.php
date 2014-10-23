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
        
            if(Input::has('search')) {
            $search = Input::get('search');
            $query->where('title', 'like', "%$search%");
            $query->orWhere('body', 'like', "%$search%");
        }

        $activities = $query->orderBy('activity_date', 'DESC')->paginate(10);

        return View::make('activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new activity
     *
     * @return Response
     */
    public function create()
    {
        return View::make('activities.create');
    }

    /**
     * Store a newly created activity in storage.
     *
     * @return Response
     */

    public function store(){
        $activity = new Activity();
    if (Input::hasFile('image')) {
                $file= Input::file('image');
                $destination_path = public_path() . '/img-upload/';
                $filename = uniqid('img') . '_' . $file->getClientOriginalName();
                $uploadSuccess = $file->move($destination_path, $filename);
                $activity->image = '/img-upload/' . $filename;
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
        $activity = Activity::find($id);

        return View::make('activities.edit', compact('activity'));
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
            $activity->image_path = Input::get('image');
            // $activity->user_id = Auth::id();

            $activity->save();
            $id = $activity->id;
            Log::info('Activity was sucessfully saved', Input::all());

            $message = 'Activity created sucessfully';
            Session::flash('successMessage', $message);

            return Redirect::action('ActivitiesController@show', $id);
        }
    }
}
