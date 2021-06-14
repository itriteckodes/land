<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   protected $fillable = [ 
       'job_title','fname','lname' ,'rank','image','salary','phone','address','cnic','category','join_date'
   ];

   public function setImageAttribute($value){
       
    $this->attributes['image'] = ImageHelper::saveResizedImage($value,'images/employees',640,605);
    }

    public function getImageAttribute($value){
       
    return $this->attributes['image'] = asset($value);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }
}
