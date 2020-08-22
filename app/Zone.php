<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = [
        'name','post_code'
    ];
    public function locations()
    {
        return $this->hasMany('App\Location');
    }
}
