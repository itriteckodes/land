<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Lead;
use App\Models\Plot;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function store(Request $request){
        Contact::create($request->all());
        toastr()->info('your message was sent','Done');
        return redirect()->back();
    }

    public function index(){
        $contacts = Contact::all();
        return view('admin.contact.index')->with('contacts',$contacts);
    }

    public function save_lead(Request $request){
        if($request->plot_id){
            $plot = Plot::find($request->plot_id);
             Lead::create(['agent_id'=>$plot->agent_id,'user_id'=>Auth::user()->id]+$request->all());
        }
        elseif($request->property_id){
            $property = Property::find($request->property_id);
             Lead::create(['agent_id'=>$property->agent_id,'user_id'=>Auth::user()->id]+$request->all());
        }
        toastr()->info('your Lead was submitted to the agent you will be responded soon','Done');
        return redirect()->back();
    }
}
