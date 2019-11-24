<?php

namespace App\Http\Controllers;

use App\EyeDisease;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public $users;

    public function __construct()
    {
        $this->users = User::all();
        foreach ($this->users as $user) {
            $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
            $role = strtolower(DB::table('roles')->where('id', $roleId)->first()->name);
            $bgRole = 'Немедицинско лице';
            switch ($role) {
                case 'user';
                    $bgRole = 'Немедицинско лице';
                    break;
                case 'medical user';
                    $bgRole = 'Mедицинско лице';
                    break;
                case 'admin';
                    $bgRole = 'Администратор';
                    break;
                default:
                    break;
            }
            $user->role = $bgRole;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users.index")->with('users', $this->users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
//        $roleId = DB::table('role_user')->where('user_id', $user->id)->first()->role_id;
//        $role = strtolower(DB::table('roles')->where('id', $roleId)->first()->name);
//        $user->role = $roleId;
//        if(auth()->user()->id !== $recipe->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
        return view("users.edit")->with('user', $user);
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id)
    {

//        echo '<pre>';
//        var_dump($request);die;
//        $this->validate(
//            $request, [
//                'name' => 'required',
//                'email' => 'required',
//                'password' => 'required',
//                'avatar' => '',
//                'country' => '',
//                'city' => '',
//                'address' => '',
//                'active' => 'required',
//                'role' => '',
//            ]
//        );



//        dd(Auth::id());
//        echo '<pre>';
//        var_dump($request->all());die;
        $data = $request->all();

        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->avatar = $data['avatar'];
        $user->country = $data['country'];
        $user->city = $data['city'];
        $user->address = $data['address'];
        $user->active = $data['active'];

        $user->save();
        $user->setRole($id, $data['role']);
        return redirect("/users")->with("success", "User Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

//        if(auth()->user()->id !== $user->user_id){
//            return redirect("/")->with('error', "You are not authorized to perform that action");
//        }else{
//            $fileToDelete = $recipe->cover;

//            $prevFile = "storage". DIRECTORY_SEPARATOR . "covers" . DIRECTORY_SEPARATOR . $fileToDelete;

//            unlink(public_path($prevFile));

        $user->delete();
        DB::table('role_user')->where('user_id', '=', $id)->delete();
        return redirect("/users")->with("success", "User Deleted!");
//        }
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function block($id)
    {
        $active = DB::table('users')->where('id', $id)->first()->active;
//        echo '<pre>';
//        var_dump($active);die;
        $user = User::find($id);
        $user->active = (int)(!(bool)$active);
        $user->save();
        return redirect('users');
//        return view("users.index")->with('users', $this->users);
//        var_dump($isBlocked);
    }
}
