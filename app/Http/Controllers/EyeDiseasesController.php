<?php

namespace App\Http\Controllers;

use App\EyeDisease;
use App\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EyeDiseasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eyeDiseases = EyeDisease::all();
        return view("eye-diseases.index")->with('eyeDiseases', $eyeDiseases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("eye-diseases.create");
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
                'symptoms' => 'required',
                'causes' => 'required',
                'risk-factors' => 'required',
                'complications' => 'required',
                'treatment' => 'required'
            ]
        );

        $eyeDisease = new EyeDisease();

        $eyeDisease->title = $request->input('title');
        $eyeDisease->symptoms = $request->input('symptoms');
        $eyeDisease->causes = $request->input('causes');
        $eyeDisease->risk_factors = $request->input('risk-factors');
        $eyeDisease->complications = $request->input('complications');
        $eyeDisease->treatment = $request->input('treatment');
//        $recipe->user_id = Auth::id();

        $eyeDisease->save();
        return redirect("/eye-diseases")->with("success", "Eye disease Created!");
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $eyeDisease = EyeDisease::find($id); //get the post using the ID
        return view("eye-diseases.show")->with('eyeDisease', $eyeDisease); //return a view with the post data
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eyeDisease = EyeDisease::find($id);
//        if(auth()->user()->id !== $recipe->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
        return view("eye-diseases.edit")->with('eyeDisease', $eyeDisease);
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'title' => 'required',
                'symptoms' => 'required',
                'causes' => 'required',
                'risk-factors' => 'required',
                'complications' => 'required',
                'treatment' => 'required'
            ]
        );

//        dd(Auth::id());
//        echo '<pre>';
//        var_dump($request);die;

        $eyeDisease = EyeDisease::find($id);
        $eyeDisease->title = $request->input('title');
        $eyeDisease->symptoms = $request->input('symptoms');
        $eyeDisease->causes = $request->input('causes');
        $eyeDisease->risk_factors = $request->input('risk-factors');
        $eyeDisease->complications = $request->input('complications');
        $eyeDisease->treatment = $request->input('treatment');

        $eyeDisease->save();
        return redirect("/eye-diseases")->with("success", "Eye disease Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eyeDisease = EyeDisease::find($id);

        $role = DB::table('role_user')
            ->select('roles.name')
            ->join('roles', 'role_user.role_id', '=', 'roles.id')
            ->where(['role_user.user_id' => auth()->user()->id])
            ->get()
            ->first();

        if(strtolower($role->name) !== 'admin'){
            return redirect("/")->with('error', "You are not authorized to perform that action");
        }else{
//            $fileToDelete = $recipe->cover;

//            $prevFile = "storage". DIRECTORY_SEPARATOR . "covers" . DIRECTORY_SEPARATOR . $fileToDelete;

//            unlink(public_path($prevFile));

            $eyeDisease->delete();
            return redirect("/eye-diseases")->with("success", "Eye diseases Deleted!");
        }
    }
}
