<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Image;
use App\Destination;
use App\UserBooking;

class Trip extends Model
{
    //
    public function image(){
       return $this->hasMany(Image::class);
    }
    public function destinations(){
        return $this->hasMany(Destination::class);
    }
    public function userbookings(){
        return $this->hasMany(UserBooking::class);
    }
}