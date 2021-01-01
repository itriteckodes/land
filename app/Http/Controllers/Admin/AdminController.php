<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
   public function dashboard()
   {
       return view('admin.dashboard');
   }

   public function profile(){
    $user = Auth::user();
    return view('admin.profile')->with('user',$user);
}
public function update_profile(Request $request){
    $user = Auth::user();
    $user->update($request->all());
    toastr()->success('profile was updated','Done');
    return redirect()->back();
    
}
   
   public function logout(){
    Auth::guard('admin')->logout();
    return redirect()->route('login');

    
}
}
