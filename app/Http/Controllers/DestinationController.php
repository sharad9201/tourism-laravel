<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Destination;
use App\db;

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
      //  $destination -> Auth::user()->id;
       $destination->user_id = auth()->user()->id;
       $destination->save();

       return redirect()->route('detail');
   }
   public function index(){
      

      $destinations=Destination::paginate(5);
      return view('booking',compact('destinations'));

      // $users = User::find(auth()->user()->id);

      //  return view('booking', compact('destinations'));

   }
   // public function userbook(){
   //    // $destinations = Destination::all($id);
   //    $destinations=Destination::paginate(10);

   //    // $users = User::find(auth()->user()->id);
   //    return view('userbooking',compact('users'));
   // }
    public function show(Destination $id){

      // $destinations = new Destionation;
      $destinations = Destination::find($id);
      return view('booking')->with("destinations",$destination);
   }

  


}
