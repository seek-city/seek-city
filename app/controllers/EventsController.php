<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of events
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Event::all();

		return View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new event
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('events.create');
	}

	/**
	 * Store a newly created event in storage.
	 *
	 * @return Response
	 */
	public function store(){
		$event = new Event();
	if (input::hasFile('image')) {
				$file= Input::file('image');
				$destination_path = public_path() . '/img-upload/';
				$filename = uniqid('img') . '_' . $file->getClientOriginalName();
				$uploadSuccess = $file->move($destination_path, $filename);
				$event->image = '/img-upload/' . $filename;
			}
			return $this->saveEvent($event);
	}
	/**
	 * Display the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$event = Event::findOrFail($id);

		return View::make('events.show', compact('event'));
	}

	/**
	 * Show the form for editing the specified event.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$event = Event::findOrFail($id);

		return View::make('events.edit', compact('event'));
		{
		
			}
	}



	/**
	 * Update the specified event in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$event = Event::findOrFail($id);
	
		return $this->saveEvent($event);
	}


	/**
	 * Remove the specified event from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
{
		$event = Event::find($id);
		if (!$event){
			App::abort(404);
		}
		$event->delete(); 
		log::info('Event deleted successfully');
		Session::flash('successMessage' , 'Event deleted sucessfully');
		return Redirect::action('EventController@index');

	}

}



public function saveEvent(Event $event);
	{
		$validator= Validator::make(Input::all(), Event::$rules);

		if ($validator->fails()){
			Session::flash('errorMessage', 'Your event needs title and body');
			Log::error('Event validator failed', Input::all());
			return Redirect::back()->withInput();

		} else {
			$event = new Event;
			$event->title = Input::get('title');
			$event->body = Input::get('body');
			$event->user_id = Auth::id();

			if (input::hasFile('image')) {
				$file= Input::file('image');
				$destination_path = public_path() . '/img/';
				$filenmae = str_random(6) . '_' . $file->getClientOriginalName();
				$uploadSuccess = $file->move($destination_path, $filename);
				$event->image = '/img/' . $filename;
			}

			$event->save();

			Log::info('Event was sucessfully saved');

			$message = 'Event created sucessfully';
			Session::flash('sucessMessage', $message);

			return Redirect::action('EventsController@show');
		}
	}
