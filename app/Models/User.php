<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use App\Traits\UserMethods;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable , UserMethods;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'image',
        'password',
        'code'
    ];
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setPasswordAttribute($value){
        return $this->attributes['password'] = Hash::make($value);
    }
    public function setImageAttribute($value){
       
        $this->attributes['image'] = ImageHelper::saveResizedImage($value,'images/agents',640,605);
        }
    
    public function getImageAttribute($value){
        
    return $this->attributes['image'] = asset($value);
    }

    public function services(){
        return $this->belongsToMany(Service::class,'user_services');
    } 
    
    public function plots(){
        return $this->hasMany(Plot::class);
    }

    public function properties(){
        return $this->hasMany(Property::class);
    }
}
