<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Trip;
class Image extends Model
{
    //
    public function trip(){
        return $this->belongsTo(Post::class,'image_id','id');
    }
}