<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [ 
        'name','phone','email','message','property_id','plot_id','service_id','token_amount'
    ];

    public function plot(){
        return $this->belongsTo(Plot::class);
    }

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function property(){
        return $this->belongsTo(Property::class);
    }

  
}
