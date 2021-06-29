<?php

namespace App\Http\Controllers;

use App\Models\Plot;
use Illuminate\Http\Request;

class PlotController extends Controller
{
    public function index(){
        $plots = Plot::where('occupy',false)->orderBy('price','DESC')->get();
        return view('front.plotList')->with('plots',$plots);
    }
    public function details($id){
        $plot = Plot::find($id);
        return view('front.plot_detail')->with('plot',$plot);
    }
}
