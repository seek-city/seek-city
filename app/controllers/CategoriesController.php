<?php

class CategoriesController extends \BaseController {

    /**
     * Display a listing of categories
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();

        return View::make('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category
     *
     * @return Response
     */
    public function create()
    {
        return View::make('categories.create');
    }

    /**
     * Store a newly created category in storage.
     *
     * @return Response
     */
    public function store()
    {
        $category = new Category();

        return $this->saveCategory($category);
    }

    /**
     * Display the specified category.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $categories = Category::findOrFail($id);

        return View::make('categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return View::make('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
      {
        $category = Category::findOrFail($id);
    
        return $this->saveCategory($category);
    }
    /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
        }
        catch (ModelNotFoundException $e) {
            App::abort(404);
        }

        $category->delete(); 
        Log::info('Category deleted successfully.');
        $message = "So long, $category->title!";
        
        if (Request::ajax()) {
            return Response::json(array(
                'success' => true,
                'message' => $message
            ));
        }
        else {
            Session::flash('successMessage', $message);
            return Redirect::action('CategoriesController@index');
        }
    }

    public function saveCategory(Category $category)
    {
        $validator = Validator::make(Input::all(), Category::$rules);

        if ($validator->fails()){
            Session::flash('errorMessage', 'Your category needs a name.');
            Log::error('Category validator failed', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);

        } else {

            $category->name = Input::get('name');

            $category->save();
            $id = $category->id;
            Log::info('Category was sucessfully saved,', Input::all());

            $message = 'Category created sucessfully.';
            Session::flash('successMessage', $message);

            return Redirect::action('CategoriesController@show', $id);
        }
    }

    public function manage()
    {
        $categories = DB::table('categories')->paginate(10);
        return View::make('categories.manage')->with('categories', $categories);
    }
}
