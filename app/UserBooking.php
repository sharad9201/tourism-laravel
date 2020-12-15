<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip;

class UserBooking extends Model
{
    //
    //  public function userbooking()
    // {
    //     return $this->belongsToMany('App\Role', 'role_user_table', 'user_id', 'role_id','destination_id');
    // }
    public function trip(){
        return $this->belongsTo(Post::class,'id');
    }
}
