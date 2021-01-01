<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
}
