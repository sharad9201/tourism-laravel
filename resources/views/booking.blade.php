@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="alert alert-warning" role="alert">
           Booking can be canceled Before 3 Days only
          </div>
         
          <h2 class="text-center">My Bookings</h2>
         
        @foreach ($bookings as $booking)
              
        <div class="card p-3">
        <div class="row">
            
          
          @foreach($destiantions as $destination)
            <div class="col-lg-9 col-md-8 mb-10">
                
                <h4 class="m-0">Destination to {{$trip->title}}</h4>
                <hr class="m-2">
                <div class="row"> 
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p class="m-1">Destination: <span class="font-weight-bold">Honkong</span></p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Email: <span class="font-weight-bold">testuser@gamil.com</span></p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Trip Date: <span class="font-weight-bold">2020/12/18</span></p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <p class="m-1">Phone Number: <span class="font-weight-bold">9869696969</span></p>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <p class="m-1">Extra: <span class="font-weight-bold">extra</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        @endforeach
        @endforeach
        
    </div>
@endsection

@section('index')
@can('edit-users')
@foreach ($destinations as $destination )
{{-- @foreach ($trips as $trip) --}}
<div class="container my-4">
    {{-- <h1> {{$trip->title}}</h1> 
    <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid">  --}}
    <div class="card p-4 my-4">
        <h2>Trip Facts</h2>
        <div class="row"> 
            <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->Full_name}}</span></p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <p class="m-1">Email: <span class="font-weight-bold">{{$destination->gmail}}</span></p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <p class="m-1">Trip Date: <span class="font-weight-bold">{{$destination->trip_date}}</span></p>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <p class="m-1">Phone Number: <span class="font-weight-bold">{{$destination->phone_number}}</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->trip->destination}}</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Extra: <span class="font-weight-bold">{{$destination->extra}}</span></p>
                    </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-12">
            <p class="m-1">Transport: <span class="font-weight-bold">
            @foreach (unserialize($destination->transport) as $item)
                {{$item}}
            @endforeach    
            </span></p>
            </div> --}}
        </div>
    </div>

    {{-- <div class="card p-4">
        <div class="div m-0">
            <p class="m-0">
            <h4 class="d-inline m-0">Package Price: </h4> <h5 class="m-0 d-inline font-weight-bold">{{$trip->price_low}}</h5> 
            </p>
        </div>
        <hr class="m-2">
        <h5>Know Before Booking</h5>
        {!! $trip->know_before_booking !!}
        <a href="{{ route('form') }}" class="btn btn-secondary text-uppercase btn-lg">book this trip</a>
    </div>
    <div class="card p-4">
       
        
        <h5>Itinery</h5>
        {!! $trip->itinerary !!}

    </div>
    <div class="card p-4">
       
        
        <h5>highlights</h5>
        {!! $trip->higlight !!}

    </div>
    
    <div class="card p-4">
       
        
        <h5>Included</h5>
        {!! $trip->included !!}

    </div>

    <div class="card p-4">
       
        
        <h5>Not Included</h5>
        {!! $trip->not_included!!}

    </div> --}}
  
   
</div> 
{{-- @endforeach --}}
@endforeach
@endcan


@endsection