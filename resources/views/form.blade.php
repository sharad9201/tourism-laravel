@extends('layouts.app')

@section('content')
<div class="container card mt-2 p-3">
    <h1>Booking Form</h1>
        
    
    <form action={{route('destination.submit')}} method="POST">
        @csrf
        <div class="form-group">
            <label for="Full_name">Full Name</label>
            <input class="form-control" placeholder="Full_name" type="text" name="Full_name" id="Full_name">
        </div>
        <div class="form-group">
            
            <label for="gmail">Gmail</label>
            <input class="form-control" placeholder="E-mail" type="email" name="gmail" id="gmail">
        </div>
       
        <div class="form-group">

            {{-- @foreach ($trips as $trip ) --}}

        <label for="gmail"><strong><strong> Destination: {{$trip->destination}}</strong></label>
          <input type="hidden" id="trip_id" name="trip_id" value="{{$trip->id}}">

        {{-- <input id="trip_id" name="trip_destination"  placeholder="{{$trip->destination}}" readonly>  --}} --}}
            {{-- {{dd($destinations)}}
            <input type="hidden" id="trip_id" name="trip_id" value="{{$destination->trip_id}}">
                  
            <input id="trip_id" name="destination" value="{{$trip->destination}}"> --}}
                          
        </div>
       
      
        <div class="form-group">
            <label for="date">Trip Date</label>
            <input class="form-control" type="text" name="trip_date" id="trip_date">
        </div>
        {{-- @foreach($trips as $trip)
        {{dd($trip->id)}} --}}

        {{-- @endforeach --}}
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" placeholder="phone_number" type="phone_number" name="phone_number" id="phone_number">
        </div>
        <div class="form-group">
            <label for="extra">Extra Requirements</label>
            <textarea class="form-control" id="extra" type="extra" name="extra" placeholder="extra"></textarea>
            {{-- <input class="form-control" placeholder="Extra Requirements" type="text" name="extra" id="extra"> --}}
        </div>
        <input  type="submit" value="Confirm Booking" class="btn btn-primary">
        
    </form>
</div>
@endsection