<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    public function store(Request $request){
        User::create($request->all());
        toastr()->warning('you are registered successfully');
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



    //verfication
    public function verification(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            $user->code = rand(111111,999999);
            $user->save();
            $this->sendMail($user);
            toastr()->info('Verification code sent');
            return view('user.reset')->with('email',$request->email);
        }
        else{
            toastr()->error('Invalid email');
            return redirect()->back();
        }
    }

    private function sendMail($user){
        // $user->email = 'siddiqueakbar560@gmail.com';
        $data = ['code' => $user->code];
        Mail::send('mail', $data, function ($message) use ($user){
            $message->from('EagleCity@support.com', 'Eagle City');
            $message->to($user->email, $user->name)
            ->subject('Reset Password');
        });
    }

    public function resetPassword(Request $request){
      
        $user = User::where('email',$request->email)->first();
        if($user){
            if($user->code == $request->code){
                $user->update([
                    'password' =>$request->password,
                    'code' => null
                ]);
            }
            else{
                toastr()->error('Invalid code please try again');
                return redirect()->route('user.login');
            }
        }
        else{
            return redirect()->back();
            toastr()->error('Invalid email please try again');
        }
        toastr()->success('Password reset successfuly');
        return redirect()->route('user.login');
    }

    public function download(){
        $file = public_path()."/register.pdf";
        $headers = array('Content-Type: application/pdf',);
        return Response::download($file, 'register.pdf',$headers);
    }
}
