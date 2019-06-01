<?php

namespace App\Http\Controllers;

use App\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        return view("recipes.index")->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("recipes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate(

            $request, [
                'title' => 'required',
                'preptime' => 'required',
                'image' => 'required|image|max:1999',
                'description' => 'required',
                'ingredients' => 'required',
                'preparation' => 'required'
            ]
        );

        $fullFilename = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($fullFilename, PATHINFO_FILENAME);
        $fileExt = $request->file('image')->getClientOriginalExtension();

        $renamedFile =  $filename . "_" . time() . "." . $fileExt;

        $path = $request->file('image')->storeAs("public/covers", $renamedFile);

        $recipe = new Recipe();

        $recipe->title = $request->input('title');
        $recipe->preptime = $request->input('preptime');

        $recipe->cover = $renamedFile;
        $recipe->description = $request->input('description');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->preparation = $request->input('preparation');
//        $recipe->user_id = Auth::id();

        $recipe->save();
        return redirect("/recipes")->with("success", "Recipe Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id); //get the post using the ID
        return view("recipes.show")->with('recipe', $recipe); //return a view with the post data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = Recipe::find($id);
//        if(auth()->user()->id !== $recipe->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
            return view("recipes.edit")->with('recipe', $recipe);
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'title' => 'required',
                'preptime' => 'required',
                'image' => 'nullable|image|max:1999', //set the image as optional
                'description' => 'required',
                'ingredients' => 'required',
                'preparation' => 'required'
            ]
        );
        if( empty($request->file('image'))){
            $newFile = $request->input('imagename');
        }else{
            $fullFilename = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fullFilename, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $newFile =  $filename . "_" . time() . "." . $fileExt;
            $path = $request->file('image')->storeAs("public/covers", $newFile);
            $fileToDelete = $request->input('imagename');

            $prevFile = "storage". DIRECTORY_SEPARATOR . "covers" . DIRECTORY_SEPARATOR . $fileToDelete;
            if ( is_file( public_path($prevFile) ) ) {
                chmod ( public_path($prevFile) , 0777 );
                unlink ( public_path($prevFile));
            }
        }

//        dd(Auth::id());

        $recipe = Recipe::find($id);
        $recipe->title = $request->input('title');
        $recipe->preptime = $request->input('preptime');
        $recipe->cover = $newFile; // we save the renamed file, not the original
        $recipe->description = $request->input('description');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->preparation = $request->input('preparation');

        $recipe->save();
        return redirect("/recipes")->with("success", "Post Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);

        if(auth()->user()->id !== $recipe->user_id){
            return redirect("/")->with('error', "You are not authorized to perform that action");
        }else{
            $fileToDelete = $recipe->cover;

            $prevFile = "storage". DIRECTORY_SEPARATOR . "covers" . DIRECTORY_SEPARATOR . $fileToDelete;

            unlink(public_path($prevFile));

            $recipe->delete();
            return redirect("/recipes")->with("success", "Post Deleted!");
        }
    }
}
