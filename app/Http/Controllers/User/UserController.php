<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request){
        User::create($request->all());
        toastr()->info('you are registered successfully');
        return redirect()->back();
    }
    public function dashboard(){
        return view('user.dashboard');
    }
    public function profile(){
        return view('user.profile');
    }
    public function update_profile(Request $request){
        $user = Auth::user();
        $user->update($request->all());
        toastr()->success('your profile was updated','Done');
        return redirect()->back();
    }
}
