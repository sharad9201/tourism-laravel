<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Trip;
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
        if (auth()->user() or auth()->guest())
        {
         $user=auth()->user();
         $guest=auth()->guest();
         $images=Image::all();
       
         $trip=Trip::find($id);
        return view('form',compact('user','trip','images'));
       }
 
     else
        { 
            return view('form');
     }
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
    public function store(Request $request)
    {
        //
        $booking=new Booking;
        $booking->full_name=$request->Full_name;
        $booking->email=$request->gmail;
        $booking->trip_date=$request->trip_date;
        $booking->phone_number=$request->phone_number;
        $booking->extra=$request->extra;
        $booking->trip_id=$id;
        $booking->save();

        return redirect(route('userbooking.show'));

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

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
    public function destroy($id)
    {
        //
    }
}