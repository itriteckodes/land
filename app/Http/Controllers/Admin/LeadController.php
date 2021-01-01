<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function plots(){
        $leads = Lead::where('plot_id','!=',null)->get();
        return view('admin.lead.plot')->with('leads',$leads);
    }
    public function properties(){
        $leads = Lead::where('property_id','!=',null)->get();
        return view('admin.lead.property')->with('leads',$leads);
    }

    public function services(){
        $leads = Lead::where('service_id','!=',null)->get();
        return view('admin.lead.service')->with('leads',$leads);
    }
}
