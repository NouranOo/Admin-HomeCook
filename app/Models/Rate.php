<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
 

class Rate extends Model  
{
 
     protected $table="ratings";
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_id','Cooker_id','CookerMeal_id','Rate','Reason','Created_at','Updated_at'
    ];
    protected $casts = [
        'User_id' => 'int',
        'Cooker_id'=>'int',
        'CookerMeal_id'=>'int',
        'Rate'=>'float',
        
    ];
    public function CookMeal(){
        return $this->belongsTo('App\Models\Cooker_Meal','CookerMeal_id');
    }
   

   
}
