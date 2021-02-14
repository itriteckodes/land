<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    protected $fillable = [
        'user_id','service_id'
    ];

    public function service(){
       return  $this->belongsTo(Service::class);
    }
        public function user(){
       return $this->belongsTo(User::class);
    }
}