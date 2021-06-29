<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.user.index')->with('users',$users);
    }
    public function user_plots($id)
    {
        $user = User::find($id);
        $plots = $user->plots;
        return view('admin.user.user_plots')->with('plots',$plots);
    }
    public function user_properties($id){
        $user = User::find($id);
        $properties = $user->properties;
        return view('admin.user.user_prop')->with('properties',$properties);
    }

    public function delete_user($id){
        $user = User::find($id);
        $user->delete();
        toastr()->success('user was deleted');
        return redirect()->back();
    }
}
