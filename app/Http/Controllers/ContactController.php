<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Lead;
use Illuminate\Http\Request;

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
        Lead::create($request->all());
        toastr()->info('your form was submitted to the agent you will be responded soon','Done');
        return redirect()->back();
    }
}
