<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    public function dashboard(){
        return view('agent.dashboard');
    }

    public function profile(){
        $user = Auth::user();
        return view('agent.profile')->with('user',$user);
    }
    public function update_profile(Request $request){
        $user = Auth::user();
        $user->update($request->all());
        toastr()->success('profile was updated','Done');
        return redirect()->back();
        
    }

    public function logout(){
        Auth::guard('agent')->logout();
        return redirect()->route('login');
        
    }
}
