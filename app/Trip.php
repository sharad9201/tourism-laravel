<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\Image;
class Trip extends Model
{
    //
    public function image(){
       return $this->hasMany(Image::class);
    }
}