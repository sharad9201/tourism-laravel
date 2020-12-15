<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip;
class Booking extends Model
{
    //
    public function trip(){
        return $this->belongsTo(Trip::class,'trip_id');
    }
}