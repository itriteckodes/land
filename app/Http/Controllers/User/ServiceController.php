<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use App\Models\UserService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Stripe\Charge;
use Stripe\Stripe;

class ServiceController extends Controller
{
    public function index(){
        

        $user = Auth::user();
       $availed_services =  $user->services;
        $services = Service::all();
        $exclude = [];
        foreach($availed_services as $ser){
            array_push($exclude,$ser->id);
        }
        $real_services = $services->except($exclude);

        return view('user.service.index')->with('services',$real_services);
    }

    public function avail($id){
        $service = Service::find($id);
        UserService::create([
            'user_id'=> Auth::user()->id,
            'service_id' => $service->id,
        ]);
        toastr()->info('you just applied to avail this service eagle city service will approach you soon');
        return redirect()->back();
    }
    public function userService(){
        $user = Auth::user();
        $total = UserService::where('user_id',$user->id)->where('status',false)->get('service_id');
        $monthly = null;
        foreach ($total as $key => $value) {
            $monthly += $value->service->price;
        }
       $services =  $user->services;
       return view('user.service.myService')->with('services',$services)->with('monthly',$monthly);
    }

    public function servicepayment(Request $request)
    {
        $amount = $request->payment;
        $user = User::find($request->id);
        $random = Str::random(60);
        return view('user.service.stripe')->with('amount',$amount)->with('user',$user);
    } 
    
    public function servicepay(Request $request)
    {
        Stripe::setApiKey('sk_test_51IVZcBDoZl8DJ0XN2B6ryI8a1tssqoDcso3P1IDP7GxJ1qtmPnCGh9Ywap5fBwmQkGB5LIX4luKiWLlg202VvuJU00KKpdAkHt');
        Charge::create([
            "amount" => $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from User for Services"
        ]);

        $total = UserService::where('user_id',$request->user_id)->get();
        foreach ($total as $key => $value) {
            $value->update([
                'status' => true
            ]);
        }
        toastr()->success('Payment Success','Done');
        return redirect()->back();
    }
}
