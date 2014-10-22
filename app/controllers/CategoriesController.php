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
        return $this->savecategorie($category);
    }

		Category::create($data);

		return Redirect::route('categories.index');
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
		$categories = Category::find($id);

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
        $categories = Category::findOrFail($id);
    
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
            $categories = Category::findOrFail($id);
        }
        catch (ModelNotFoundException $e) {
            App::abort(404);
        }

        $categories->delete(); 
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

public function saveCategorie(Categorie $categorie)
    {
        $validator = Validator::make(Input::all(), Categorie::$rules);

        if ($validator->fails()){
            Session::flash('errorMessage', 'Your category needs a name');
            Log::error('Categories validator failed', Input::all());
            return Redirect::back()->withInput();

        } else {
            
            $category->name = Input::get('name');
            

            $category->save();
            $id = $category->id;
            Log::info('categorie was sucessfully saved', Input::all());

            $message = 'Categorie created sucessfully';
            Session::flash('successMessage', $message);

            return Redirect::action('CategoriesController@show', $id);
        }
    }
}
