<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Destination;
use App\Image;
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
        // $trips->destination = $destinaton->trip_id;
      
        // $trips->trip_id=$trip->id;
        // $trip= Trip::all();
        // $trips=DB::table('destinations')->where('trip_id','=',trip_id)->get();

        // $trip = destinations()->trip($id);
        
        // $destinaton=DB::table('destinations')->where('trip_id','=',$id)->get();
        //  $trips= Trip::all();
        // $trips=destination();
        // $trip_id=$trip->id;
        // dd($trips);
        // return view('form');
        // dd($trip->id);
        // $trips=DB::table('trips')->get();
        $trip = Trip::find($id);
        return view('form',compact('trip'));
        // return view('form',compact('trips'))->with('trips',$trips->destinations);

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
