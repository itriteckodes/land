<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Property;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index(){
        $agents = Agent::all();
        return view('front.agents')->with('agents',$agents);
    }

    public function agentProperty($id){
        $properties = Property::where('agent_id',$id)->get();
        return view('front.agent_property')->with('properties',$properties);
    }
    public function property_details($id){
        $property = Property::find($id);
        return view('front.propertyDetails')->with('property',$property);
    }

    public function properties(){
        $properties = Property::all();
        return view('front.agent_property')->with('properties',$properties);

    }
}
