<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\User;
use App\Trip;

class Destination extends Model
{
    //
    
    //  protected $table = 'destination';

    public $primaryKey = 'destination_id';

    public $timestamps = true;
    
    public function users(){
        return $this->belongsToMany('App\User');
    }
   
    public function trip(){
        return $this->belongsTo('App\Trip');
    }
    
    // public function hasAnyUsers($users){
    //     if($this->users()->whereIn('gmail_id',$users)->first()){
    //         return true;
    //     }
    //     return false;
    // }
    // public function hasUser($user){
    //     if($this->users()->where('gmail_id',$user)->first()){
            
    //         return true;
    //     }
    //     return false;
    // }
}
