<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
       $services =  $user->services;
       return view('user.service.myService')->with('services',$services);
    }
}
