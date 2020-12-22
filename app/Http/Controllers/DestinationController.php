<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Destination;
use DB;
use App\Trip;
use App\Image;
use App\DestinationStatus;
use App\Http\Request\DateRequest;


class DestinationController extends Controller
{

   function save(Request $req){
      $date=date_create(date("m/d/Y")); 
     
      date_add($date,date_interval_create_from_date_string("4 days"));
      $dateafter=date_format($date,"m/d/Y");
    
      $this->validate($req,[
         'Full_name'=>'required',
       'phone_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         'trip_date'=>'required|after_or_equal:'.$dateafter,
     ]);
     
    //  print_r($req->input());

       $destination = new Destination;
      
      //  $destination->trip_id=$request->trip_id;
      //  $destination->destination=$req->destination;
      
       $destination ->Full_name = $req->Full_name;
       $destination ->gmail= $req->gmail;
       
       $destination ->trip_date = $req->trip_date;
       $destination ->phone_number = $req->phone_number;
       $destination ->extra = $req->extra;
     

       $destination->user_id = auth()->user()->id;
       $destination->trip_id=$req->trip_id;
      
       $destination->save();
      toastr()->success("booked successfully");
       return redirect()->route('tripdetail.show',['tripdetail'=>$req->trip_id]);
   }


   //showing category wise packages
   public function category($category)
   {
      $trips=DB::table('trips')->where('trip_style','=',$category)->simplePaginate(15);
    
      $images=Image::all();

      return view('packagedisplay',compact('trips','images'));
   }




   public function index(){
      
      $status=DestinationStatus::all();
     
      $destinations=Destination::paginate(5);
      return view('userbooking',compact('destinations','status'));

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
      return view('booking')->with("destinations",$destinations);
   }

  


}