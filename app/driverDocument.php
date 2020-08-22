<?php

namespace App;
use App\Driver;

use Illuminate\Database\Eloquent\Model;

class driverDocument extends Model
{
    protected $table = 'driver_documents';

    protected $fillable = [
        'expiry_date',
        'document_title',
        'file_no',
        'driver_id'
    ];

    public function driver()
    {
        return $this->belongsTo('App\Driver');
    }
}
