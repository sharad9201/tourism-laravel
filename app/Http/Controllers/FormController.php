<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Trip;
use App\Booking;

use App\Destination;

use DB;
class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        if (auth()->user()!=null)
        {
         $user=auth()->user();
         $guest=auth()->guest();
         $images=Image::all();
         $trip=Trip::find($id);
        return view('form',compact('user','trip','images'));
       }
 
     else
        { 
            return view('dashboard');
     }
    }
    public function show(){
        
       
        
        if(auth()->user()!=null)
        {
            
            $bookings=DB::table('bookings')->where('email',"=",auth()->user()->email)->get();
            //trip id
            $trips=collect([]);
           
            foreach($bookings as $booking)
            {
              
                $id=$booking->trip_id;
                $product=Trip::find($id);
                $trips->push($product);

            
            }
           $images=Image::all();
            
            return view('booking',compact('bookings','trips','images'));
            
        }
        
        else{
            toastr()->warning('Login to see the process  ');
            return redirect(route('dashboard'));
        }
        
        // $users = User::find(auth()->user()->id);
  
        //  return view('booking', compact('destinations'));
  
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function booking(Request $request,$id)
    {
        //
        $booking=new Booking;
        $booking->full_name=$request->Full_name;
        $booking->email=$request->gmail;
        $booking->trip_date=$request->trip_date;
        $booking->number=$request->phone_number;
        $booking->extra=$request->extra;
        $booking->trip_id=$id;
        $booking->save();
        toastr()->success("booked successfully");
        return redirect(route('bookusershow'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
     
        $booking=Booking::find($id);
        $booking->delete();
        toastr()->success("delated successfully");
        return redirect(route('bookusershow'));
    }
}