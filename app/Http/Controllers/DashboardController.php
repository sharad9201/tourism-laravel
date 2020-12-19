<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Post;
use App\Destination;
use App\Image;
use App\Extraimage;
use DB;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $trips=Trip::all();
        $images=Image::all();
        $extra=Extraimage::all();
        $trip=Trip::all()->groupby('trip_style');
        $lows=DB::table('trips')->orderby('price_low')->get();
        
        // /dd($images);
        return view('dashboard',compact('trips','images','extra','lows'));
        
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
        // // $trip= User::find($id);
        // // $trip= Trip::find($id);
        // $destinations = Destination::all();
        // return view('booking')->with("destinations",$destinations);
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


    //search bring from dashboard

    public function search(Request $request)
    {
        $keyword=$_GET['query'];
        $images=Image::all();
        $trips = Trip::where('title','LIKE','%'.$keyword.'%')->orWhere('destination','LIKE','%'.$keyword.'%')->orWhere('itinerary','LIKE','%'.$keyword.'%')->get();
       
        return view('search',compact('images','trips'));
       
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