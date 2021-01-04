<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function plots(){
        $leads = Lead::where('plot_id','!=',null)->get();
        // $leads = Lead::wherePlot_id(1)->get();
        return view('agent.lead.plot')->with('leads',$leads);
    }
    public function properties(){
        $leads = Lead::where('property_id','!=',null)->get();
        return view('agent.lead.property')->with('leads',$leads);
    }
}
