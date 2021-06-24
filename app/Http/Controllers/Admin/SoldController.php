<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use App\Models\Property;
use Illuminate\Http\Request;

class SoldController extends Controller
{
    public function sold_plots(){
        $plots = Plot::where('occupy',true)->get();
        return view('admin.plots.index')->with('plots',$plots);
    }
    
    public function sold_properties(){
        $properties = Property::where('occupy',true)->get();
        return view('admin.property.index')->with('properties',$properties);   
    }
}
