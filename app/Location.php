<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = [
        'name', 'address', 'code','type_id','charge','zone_id'
    ];

    public function type()
    {
        return $this->belongsTo('App\Type');
    }
    public function zone()
    {
        return $this->belongsTo('App\Zone');
    }
    public function fares()
    {
        return $this->hasMany('App\Fare', 'veh_id', 'id');
    }
}
