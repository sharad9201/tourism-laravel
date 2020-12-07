<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use App\Destination;
use App\Trip;
use DB;
use Auth;

class UserBookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Destination $id)
    {
        // $users = User::find(auth()->user()->id);
        // $destinations = Destination::find($id);
        // // $users =  User::find(auth()->user()->id);
        
        // // $destinations = User::find(auth()->user()->id);
        // return view('userbooking', compact('users'));
        
          
        //   $destinations =Destination::all();
        // $destinations=Destination::paginate(10);
        
        // $user_id = Auth::user()->id;
        // $destination_id =$id;
        // return $destinations = Destination::find($destination_id);
        // $detination = $destinations->find('active');
        // $data['data'] = DB::table('users')
        //             ->join('Full_name','users.id','=','Full_name.user_id');

//  return $user_id;
       
    //    return $destinations = DB::table('destinations')->select('Full_name')->get();
        // $name = new $user_name;
        $user_id = Auth::user()->id;
        

        $destinations =Destination::where('Full_name','swastika rai')->get();
        return view('userbooking')->with('destinations',$destinations);

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
