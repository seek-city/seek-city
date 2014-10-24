<?php

class CalendarsController extends \BaseController {

	/**
	 * Display a listing of calendars
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new calendar
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('calendars.create');
	}

	/**
	 * Store a newly created calendar in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Calendar::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Calendar::create($data);

		return Redirect::route('calendars.index');
	}

	/**
	 * Display the specified calendar.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$calendar = Calendar::findOrFail($id);

		return View::make('calendars.show', compact('calendar'));
	}

	/**
	 * Show the form for editing the specified calendar.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$calendar = Calendar::find($id);

		return View::make('calendars.edit', compact('calendar'));
	}

	/**
	 * Update the specified calendar in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$calendar = Calendar::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Calendar::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$calendar->update($data);

		return Redirect::route('calendars.index');
	}

	/**
	 * Remove the specified calendar from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Calendar::destroy($id);

		return Redirect::route('calendars.index');
	}

}
