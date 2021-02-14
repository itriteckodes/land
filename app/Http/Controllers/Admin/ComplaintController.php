<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
   public function index(){
       $complaints = Complaint::all();
       return view('admin.complaints.index')->with('complaints',$complaints);
   }

   public function approve($id){
        $com = Complaint::find($id);
        $com->update([
            'status' => true
        ]);
        toastr()->info('complaint was fulfilled');
        return redirect()->back();
   }
}
