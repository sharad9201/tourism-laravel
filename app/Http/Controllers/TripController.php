<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;
use App\Image;
use DB;
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
        $trips=Trip::paginate(4);
        $images=Image::all();
        return view('trip.index',compact('trips','images'));
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
       
        
        $img=$request->image->store('trips'); 
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
            
            $trip->save();
           
            $image=new Image();
            $image->trip_id=$trip->id;
           
            $image->image=$img;
            $image->save();
            
        session()->flash("success","successfully saved");

        return redirect(route('tripdetail.index'));


    }

    public function photostore(Request $request)
    {
       // dd($request->trip_id);
        $img=$request->image->store('trips'); 
        $image=new Image();
        $image->trip_id=$request->trip_id;
       
        $image->image=$img;
        $image->save();
        return redirect(route('tripdetail.photo',$request->trip_id));

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
        $trip= Trip::find($id);
        $images=DB::table('images')->where('trip_id','=',$id)->get();
        return view('trip.detail',compact('trip','images'));
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
        $trip=Trip::find($id);
        return view('trip.create')->with("trip",$trip);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   $data=$request->all();
        $trip =Trip::find($id);
        
        if($request->image){
            $image=$request->image->store('trips'); 
             $trip->image=$image;
           }
        //dd($data);
          
        $transport=serialize($data['transport']);
        
 
            $trip->title=$data['title'];
        $trip->destination=$data['destination'];
            $trip->trip_difficulty=$data['difficulty'];
            $trip->trip_style=$data['style'];
            $trip->transport=$data['transport'];
            $trip->price_low=$data['low_price'];
            $trip->know_before_booking=$data['know_before_booking'];
            $trip->itinerary=$data['itenary'];
            $trip->higlight=$data['highlight'];
            $trip->day=$data['day'];
            $trip->transport=$transport;
            $trip->night=$data['night'];
            $trip->included=$data['included'];
            $trip->not_included=$data['not_included'];
            
            $trip->save();
        session()->flash("success","Updated  sucessfully");

        return redirect(route('tripdetail.index'));

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
        $package=Trip::find($id);
        $package->delete();
        return redirect(route("tripdetail.index"));
    }

    public function photo($id){
        $images=DB::table('images')->where('trip_id','=',$id)->get();
        $title=Trip::find($id);
        return view('trip.gallery',compact('images','title'));    
    }
    
}