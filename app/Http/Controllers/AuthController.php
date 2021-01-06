<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function login(Request $request){
       
      $credentials = [
          
          'email' => $request->email,
          'password' => $request->password
      ];
      

      if (Auth::guard('admin')->attempt($credentials))
      
          return redirect()->intended(route('admin.dashboard'));
      
      elseif(Auth::guard('agent')->attempt($credentials))
      
        return redirect()->intended(route('agent.dashboard'));

    
      else
          return redirect()->back()->withInput();
      
       
     }



}
