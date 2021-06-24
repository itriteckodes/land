<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Lead;
use App\Models\Plot;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function plots(){
        $leads = Lead::where('plot_id','!=',null)->where('accepted',true)->get();
        // $leads = Lead::wherePlot_id(1)->get();
        return view('agent.lead.plot')->with('leads',$leads);
    }
    public function properties(){
        $leads = Lead::where('property_id','!=',null)->where('accepted',true)->get();
        return view('agent.lead.property')->with('leads',$leads);
    }
    public function property_accept($id,$lid){
        $property = Property::find($id);
        $property->update([
            'occupy' => true,
            'user_id' => Auth::user()->id
        ]);
        $lead = Lead::find($lid);
        $lead->update([
            'accepted' => true
        ]);
        toastr()->success('Lead for this property was acepted');
        return redirect()->back();
    }

    public function plot_accept($id,$lid){
        $plot = Plot::find($id);
        $plot->update([
            'occupy' => true,
            'user_id' => Auth::user()->id
        ]);
        $lead = Lead::find($lid);
        $lead->update([
            'accepted' => true
        ]);
        toastr()->success('Lead for this Plot was acepted');
        return redirect()->back();
    }

    public function pend_plot_leads(){
        $leads = Lead::where('plot_id','!=',null)->where('agent_id',Auth::guard('agent')->user()->id)->where('accepted',false)->get();
        return view('agent.lead.pending_plot')->with('leads',$leads);
    }
    
    public function pend_prop_leads(){
        $leads = Lead::where('property_id','!=',null)->where('agent_id',Auth::guard('agent')->user()->id)->where('accepted',false)->get();
        return view('agent.lead.pending_prop')->with('leads',$leads);
    }
}
