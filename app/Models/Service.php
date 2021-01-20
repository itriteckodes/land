<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable =[
        'title','image','description','price'
    ];  

    public function setImageAttribute($value){
       
        $this->attributes['image'] = ImageHelper::saveResizedImage($value,'images/agents',640,605);
        }
    
        public function getImageAttribute($value){
           
        return $this->attributes['image'] = asset($value);
        }
}
