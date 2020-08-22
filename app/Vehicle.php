<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{ 
    protected $fillable = [
        'vehicle_type','noofpassenger','noofsuitecases','handluggage',
        'noofmiles','startrate','fImage','tColor','bgColor'
    ];
    public function fares()
    {
        return $this->hasMany('App\Fare', 'veh_id', 'id');
    }
}