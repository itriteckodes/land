<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plot extends Model
{
    protected $fillable = [
        'title','agent_id','area','image','description','address','city','lat','long','price'
       ];

       public function setImageAttribute($value){
       
        $this->attributes['image'] = ImageHelper::saveResizedImage($value,'images/property',1000,750);
    }
    
        public function getImageAttribute($value){
           
        return $this->attributes['image'] = asset($value);
    }

    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
