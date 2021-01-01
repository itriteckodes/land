<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plots = Plot::where('agent_id',Auth::user()->id)->get();
        return view('agent.plot.index')->with('plots',$plots);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agent.plot.add');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plot::create([
            'agent_id' => Auth::guard('agent')->user()->id
        ]+$request->all());
        toastr()->success('plot added successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function show(Plot $plot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function edit(Plot $plot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plot $plot)
    {
       
       $plot->update($request->all());
       toastr()->success('successfully updated');
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plot  $plot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plot $plot)
    {
        
        $plot->delete();
       toastr()->success('successfully deleted');
       return redirect()->back();
    }
}
