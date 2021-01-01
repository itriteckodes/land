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

    public function logout(){
        Auth::guard('agent')->logout();
        return redirect()->route('login');
        
    }
}
