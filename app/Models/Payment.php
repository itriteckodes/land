<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [ 
        'employee_id','amount'
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
