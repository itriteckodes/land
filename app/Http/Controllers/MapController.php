<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;

class MapController extends Controller
{
   public function maps(){
       
       $maps = Plot::all();
       return view('front.maps')->with('maps',$maps);
   }
}
