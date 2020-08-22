<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\driverDocument;

class Driver extends Model
{


    protected $fillable = [
        'pda_pass', 'pda_mobile', 'rent','driver_no','active','has_pda','driver_name','driver_lName','email','tel_no','address','date_of_birth'
        ,'mobile_no','Ni','driver_type','monthly_rent','profile_image','vehicle_make','assigned_on','end_on','vehicle_type','vehicle_color',
        'vehicle_no','owner','vehicle_model','available_on','end_at','created_at','updated_at'
    ];

    public function documents()
    {
        return $this->hasMany('App\driverDocument');
    }
}
