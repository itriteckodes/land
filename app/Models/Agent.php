<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Agent extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'phone',
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

    public function plots(){
        return $this->hasMany(Plot::class);
    }
    
    public function properties(){
        return $this->hasMany(property::class);
    }
}
