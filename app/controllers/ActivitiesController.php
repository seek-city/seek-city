<?php

class ActivitiesController extends \BaseController {

	/**
	 * Display a listing of activities
	 *
	 * @return Response
	 */
	public function index()
	{
		$activities = Activity::all();

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
		$activity = Activity::findOrFail($id);

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
		$activity = Activity::find($id);
		if (!$activity){
			App::abort(404);
		}
		$activity->delete(); 
		log::info('Activity deleted successfully');
		Session::flash('successMessage' , 'Activity deleted sucessfully');
		return Redirect::action('ActivitiesController@index');

	}


public function saveActivity(Activity $activity)
	{
		$validator = Validator::make(Input::all(), Activity::$rules);

		if ($validator->fails()){
			Session::flash('errorMessage', 'Your activity needs a title and body');
			Log::error('Activities validator failed', Input::all());
			return Redirect::back()->withInput();

		} else {
			$activity = new Activity;
			$activity->title = Input::get('title');
			$activity->body = Input::get('body');
			// $activity->user_id = Auth::id();

			if (input::hasFile('image')) {
				$file= Input::file('image');
				$destination_path = public_path() . '/img/';
				$filename = str_random(6) . '_' . $file->getClientOriginalName();
				$uploadSuccess = $file->move($destination_path, $filename);
				$activity->image = '/img/' . $filename;
			}

			$activity->save();
			$id= $activity->id;
			Log::info('Activity was sucessfully saved');

			$message = 'Activity created sucessfully';
			Session::flash('sucessMessage', $message);

			return Redirect::action('ActivitiesController@show', $id);
		}
	}
}
