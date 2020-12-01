<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('trip.index')->with('trips',Trip::all());;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('trip.create');

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
        //dd($request);
        
        $image=$request->image->store('trips'); 
        $transport=serialize($request->transport);
        $trip =new Trip;
        $trip->title=$request->title;
        $trip->destination=$request->destination;
            $trip->trip_difficulty=$request->difficulty;
            $trip->trip_style=$request->style;
            $trip->transport=$transport;
            $trip->price_low=$request->low_price;
            $trip->know_before_booking=$request["post-trixFields"][ "know_before_booking"];
            $trip->itinerary=$request["post-trixFields"]["itenary"];
            $trip->higlight=$request["post-trixFields"]["highlight"];
            $trip->day=$request->day;
            $trip->night=$request->night;
            $trip->included=$request["post-trixFields"]["included"];
            $trip->not_included=$request["post-trixFields"]["not_included"];
            $trip->image=$image;
            $trip->save();
        session()->flash("success","successfully saved");

        return redirect(route('tripdetail.index'));


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