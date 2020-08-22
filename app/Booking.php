<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=([
        'from','to','p_notes','d_notes','veh_id','p_point','d_point',
        'j_type','passenger','luggages','c_name','tel_no','mobile_no',
        'email','p_date','p_hour','driver_id','special'
    ]);

    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle', 'veh_id');
    }
    
    public function driver()
    {
        return $this->belongsTo('App\Driver', 'driver_id');
    }
}
