<?php

class MoodsController extends \BaseController {

	/**
	 * Display a listing of moods
	 *
	 * @return Response
	 */
	public function index()
	{
		$moods = Mood::all();

		return View::make('moods.index', compact('moods'));
	}

	/**
	 * Show the form for creating a new mood
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('moods.create');
	}

	/**
	 * Store a newly created mood in storage.
	 *
	 * @return Response
	 */
	public function store()
	  {
        return $this->savecategorie($category);
    }

		Category::create($data);

		return Redirect::route('categories.index');
	}
    

	/**
	 * Display the specified mood.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$mood = Mood::findOrFail($id);

		return View::make('moods.show', compact('mood'));
	}

	/**
	 * Show the form for editing the specified mood.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$mood = Mood::find($id);

		return View::make('moods.edit', compact('mood'));
	}

	/**
	 * Update the specified mood in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$mood = Mood::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Mood::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$mood->update($data);

		return Redirect::route('moods.index');
	}

	/**
	 * Remove the specified mood from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mood::destroy($id);

		return Redirect::route('moods.index');
	}

}
