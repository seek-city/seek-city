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
        $mood = new Mood();
        return $this->saveMood($mood);
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

        return $this->saveMood($mood);
    }

    /**
     * Remove the specified mood from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            $mood = Mood::findOrFail($id);
        }
        catch (ModelNotFoundException $e) {
            App::abort(404);
        }

        $mood->delete();
        Log::info('Mood deleted successfully.');
        $message = "So long, $mood->name";

        if (Request::ajax()) {
            return Response::json(array(
                'success' => true,
                'message' => $message
            ));
        }
        else {
            Session::flash('successMessage', $message);
            return Redirect::action('MoodsController@index');
        }
    }

    public function saveMood(Mood $mood)
    {
        $validator = Validator::make(Input::all(), Mood::$rules);
        
        if ($validator->fails()) {
            Session::flash('errorMessage', 'Your mood needs a name.');
            Log::error('Mood validator failed', Input::all());
            return Redirect::back()->withInput();
        } else {
            $mood->name = Input::get('name');
            
            $mood->save();
            $id = $mood->id;
            Log::info('Mood was successfully saved', Input::all());
            
            $message = 'Mood created successfully.';
            Session::flash('successMessage', $message);

            return Redirect::action('MoodsController@show', $id);
        }
    }

}
