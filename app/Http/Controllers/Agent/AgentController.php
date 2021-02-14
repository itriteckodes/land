<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

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
        return redirect()->route('agent.login');
        
    }
    

        //verification


    public function verification(Request $request){
        $agent = Agent::where('email',$request->email)->first();
        if($agent){
            $agent->code = rand(111111,999999);
            $agent->save();
            $this->sendMail($agent);
            toastr()->info('Verification code sent');
            return view('agent.reset')->with('email',$request->email);
        }
        else{
            toastr()->error('Invalid email');
            return redirect()->back();
        }
    }

    private function sendMail($agent){
        // $user->email = 'siddiqueakbar560@gmail.com';
        $data = ['code' => $agent->code];
        Mail::send('mail', $data, function ($message) use ($agent){
            $message->from('EagleCity@support.com', 'Eagle City');
            $message->to($agent->email, $agent->name)
            ->subject('Reset Password');
        });
    }

    public function resetPassword(Request $request){
      
        $agent = Agent::where('email',$request->email)->first();
        if($agent){
            if($agent->code == $request->code){
                $agent->update([
                    'password' =>$request->password,
                    'code' => null
                ]);
            }
            else{
                toastr()->error('Invalid code please try again');
                return redirect()->route('agent.login');
            }
        }
        else{
            return redirect()->back();
            toastr()->error('Invalid email please try again');
        }
        toastr()->success('Password reset successfuly');
        return redirect()->route('agent.login');
    }
}
