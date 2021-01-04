<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   protected $fillable = [
    'title','agent_id','area','bedrooms','bathrooms','garage','image1','image2','image3','description','address','city','price','type'
   ];

   public function setImage1Attribute($value){
       
    $this->attributes['image1'] = ImageHelper::saveResizedImage($value,'images/property',1000,750);
    }  
    
    public function setImage2Attribute($value){
       
    $this->attributes['image2'] = ImageHelper::saveResizedImage($value,'images/property',1000,750);
    }
    
    public function setImage3Attribute($value){
       
    $this->attributes['image3'] = ImageHelper::saveResizedImage($value,'images/property',1000,750);
    }

    public function getImage1Attribute($value){
       
    return $this->attributes['image1'] = asset($value);
    }  
     public function getImage2Attribute($value){
       
    return $this->attributes['image2'] = asset($value);
    }  
     public function getImage3Attribute($value){
       
    return $this->attributes['image3'] = asset($value);
    }
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
