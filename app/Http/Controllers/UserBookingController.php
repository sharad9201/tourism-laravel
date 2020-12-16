<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Destination;
use App\Trip;
use DB;
use Auth;
use App\Booking;
use App\DestinationStatus;
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
//bhayo?ahh
// getting id from auth of user to compare with user_id in destination table.
        $user = auth()->user();
        // dd($users->destinations);
      
        return view('userbooking')->with('destinations',$user->destinations);
        // return view('form')->with('trips',$trips->destinations);


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
    public function store(Request $request,$id)
    {
        //
      
        $dstatus=new DestinationStatus();
        $dstatus->destination_id=$id;
        $dstatus->status="cancel";
        $dstatus->save();
        toastr()->success('Canceled successfully');
        return redirect(route('booking.index'));
    
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