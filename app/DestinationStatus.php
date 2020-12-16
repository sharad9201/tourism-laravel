<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Destination;
class DestinationStatus extends Model
{
    //
    public function destinations()
    {
        return $this->belongsTo('App\Destination');
    }
}