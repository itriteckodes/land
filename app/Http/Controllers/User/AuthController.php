<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $cred = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($cred)){
            return redirect()->intended(route('user.dashboard'));
        }
        else{
            toastr()->error('you credentials were wrong','ERROR');
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
