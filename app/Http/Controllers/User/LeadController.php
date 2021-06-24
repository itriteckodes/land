<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function pending_leads(){
        return view('user.leads.pending');
    }
    
    public function accepted_leads(){
        return view('user.leads.accepted');
    }
}
