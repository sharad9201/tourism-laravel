<?php

namespace App;
use App\Role;
Use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
