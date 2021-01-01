<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function services(){
       $services  = Service::all();
       return view('front.services')->with('services',$services);
   }

   public function service_details($id){
        $service = Service::find($id);
        return view('front.serviceDetail')->with('service',$service);
   }
}
