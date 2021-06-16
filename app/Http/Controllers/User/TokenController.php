<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Plot;
use App\Models\Property;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Stripe;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokens = Token::where('user_id',Auth::user()->id)->where('property_id',null)->get();
        return view('user.token.index')->with('tokens',$tokens);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $token = Token::create($request->all());
        toastr()->success('Added To Bookings Succefully');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function show(Token $token)
    {
       if($token->plot_id != null){
       $amount =  round(($token->plot->price)*(0.1));
       $user = Auth::user();
       }
       else {
        $amount =  round(($token->property->price)*(0.1));
        $user = Auth::user();
       }
       return view('user.token.stripe')->with('amount',$amount)->with('user',$user)->with('token',$token);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function edit(Token $token)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Token $token)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Token  $token
     * @return \Illuminate\Http\Response
     */
    public function destroy(Token $token)
    {
        //
    }

    public function tokenpay(Request $request)
    {
        Stripe::setApiKey('sk_test_51IVZcBDoZl8DJ0XN2B6ryI8a1tssqoDcso3P1IDP7GxJ1qtmPnCGh9Ywap5fBwmQkGB5LIX4luKiWLlg202VvuJU00KKpdAkHt');
        Charge::create([
            "amount" => $request->amount,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Payment from User for Down payment"
        ]);

     $token =  Token::find($request->token_id);
     $token->update([
         'status'=>true
     ]);

     if($token->plot_id != null){
       $plot = Plot::find($token->plot_id);
       $plot->update([
           'occupy'=>true
       ]);
       toastr()->success('Plot Occupied Succefully');

       return redirect()->route('user.token.index');
     }

     else{      
       $property = Property::find($token->property_id);
       $property->update([
           'occupy'=>true
       ]);
       toastr()->success('Property Occupied Succefully');

       return redirect()->route('user.token.property');
    }
        
    }

    public function property(){
        $tokens = Token::where('user_id',Auth::user()->id)->where('plot_id',null)->get();
        return view('user.token.property')->with('tokens',$tokens);
    }
}
