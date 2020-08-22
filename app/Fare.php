<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    protected  $fillable =([
        'veh_id','company_wise','Floc_id','Tloc_id','fare'
        ]);
    public function Flocation()
    {
        return $this->belongsTo('App\Location', 'Floc_id', 'id');
    }
    public function Tlocation()
    {
        return $this->belongsTo('App\Location', 'Tloc_id', 'id');
    }
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle', 'veh_id', 'id');
    }
}
