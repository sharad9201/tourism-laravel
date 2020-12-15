<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Destination;
use App\Trip;
use DB;
use Auth;
use App\Booking;

class UserBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Destination $destination)
    {
       
          
        

    //    $destinations = DB::table('destinations')->select('gmail')->get();
        // $destinations =Destination::where('Full_name','swastika rai')->get();
            
        
        //  $user_id = DB::table('destinations')->find($user_id);
        
        //bhayo?ahh
        $user = auth()->user();
        // dd($users->destinations);
        dd($user->destination);
        return view('userbooking')->with('destinations',$user->destinations);

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