<?php

namespace App\Models;

// use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User  extends Authenticatable
{
//     use Illuminate\Auth\Authenticatable;
//    use Auth;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    public $timestamps = false;
    protected $fillable = [
        'Name', 'UserName','Kitchen_Name','Nationality','Phone','Late','Long',
        'Email','Photo','ApiToken','Token','IsAvailable','IsConfirmed',
        'HavePayment','National_ID','Bank_Account','UserType','VerifyCode',
        'IsVerified','Created_at','Updated_at','AvailableNotification','Address','Lat2',
        'Long2','Address2','Lat3','Long3','Address3'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'Password',
    ];

    protected $casts = [
        'Phone'=>'int',
        'Late'=>'float',
        'Long'=>'float',
        'IsAvailable' => 'int',
        'IsConfirmed'=>'int',
        'HavePayment'=>'int',
        'Bank_Account'=>'int',
        'National_ID'=>'int',
        'Lat2'=>'float',
        'Long2'=>'float',
        'Lat3'=>'float',
        'Long3'=>'float',




    ];

    public function CookerMeals(){
        return $this->hasMany('App\Models\Cooker_Meal','Cooker_id');
    }
    public function Notifications(){
        return $this->hasMany('App\Models\Notfication','notify_from');
    }
    public function cart(){
        return $this->belongsTo('App\Models\Cart','User_id');
    }
    public function Orders(){
        return $this->hasMany('App\Models\Order','User_id');
    }
    public function OrderCooker(){
        return $this->hasMany('App\Models\Order','Cooker_id');
    }
}
