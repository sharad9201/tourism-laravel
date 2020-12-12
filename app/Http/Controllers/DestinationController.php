<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Destination;
use App\db;
use App\Trip;

class DestinationController extends Controller
{

   function save(Request $req){

    //  print_r($req->input());

       $destination = new Destination;
      
      //  $destination->trip_id=$request->trip_id;
      //  $destination->destination=$req->destination;
      
       $destination ->Full_name = $req->Full_name;
       $destination ->gmail= $req->gmail;
       
      //  $destination ->destination= $req->destinaton;
       $destination ->trip_date = $req->trip_date;
       $destination ->phone_number = $req->phone_number;
       $destination ->extra = $req->extra;
      //  $destination -> Auth::user()->id;
      // dd($trip->id);
      //  $destination->trip_id=$req->$trip_id;

       $destination->user_id = auth()->user()->id;
       $destination->trip_id=$req->trip_id;
      //  $destination ->destination="";

       $destination->save();

       return redirect()->route('tripdetail.show',['tripdetail'=>$req->trip_id]);
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
