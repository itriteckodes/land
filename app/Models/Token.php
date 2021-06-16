<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'price',
        'desc',
        'user_id',
        'plot_id',
        'property_id',
        'agent_id',
        'status'
    ];

    public function plot(){
        return $this->belongsTo(Plot::class);
    }
    
    public function property(){
        return $this->belongsTo(Property::class);
    } 
}
