<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\User;
use App\Models\Role;
use Validator;
use Redirect,Response;

class UserController extends Controller
{
    public function index(){
        $data = USER::with('role')->get();
        $roles = ROLE::get();
        // dd($data);
        return view('admin.users.index', compact('data', 'roles'));
    }

    public function store(Request $request){
        $user = array(
            'name'  => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'county' => $request->county,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'role_id' => $request->role,
            'password' => $request->password
        );

        User::create($user);

        return redirect()->route('userIndex')->with('success','User Created Successfully!');;
    }

    public function update(Request $request){
        $user = array(
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'county' => $request->county,
            'city' => $request->city,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'role_id' => $request->role,
        );

        User::findOrFail($request->user_id)->update($user);

        return redirect()->route('userIndex')->with('success','User Updated Successfully!');;
    }
    
    public function destroy(Request $user){

      $deleteUser =   User::findOrFail($user->user_id);
      $deleteUser->delete();

        return redirect()->route('userIndex')->with('success','User Deleted Successfully!');
    }
}
