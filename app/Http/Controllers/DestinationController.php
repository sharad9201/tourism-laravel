<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Destination;

class DestinationController extends Controller
{
   function save(Request $req, Destination $destination){

    //  print_r($req->input());
       $destination = new Destination;
       $destination ->Full_name = $req->Full_name;
       $destination ->gmail= $req->gmail;
       $destination ->trip_date = $req->trip_date;
       $destination ->phone_number = $req->phone_number;
       $destination ->extra = $req->extra;
       $destination->save();

       return redirect()->route('detail');
   }

}
