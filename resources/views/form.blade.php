@extends('layouts.app')

<<<<<<< HEAD
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container card mt-2 p-3">
@section('content')
<div class="container card mt-2 p-3">
    <div class="row my-4">
    <div class="col-lg-6">
      
    {{-- <img src="http://www.horizontravelindia.com/wp-content/uploads/2017/10/Pokhara.jpg" alt="Main Image" class="img-fluid"> --}}
        @php
        $count=0; 
       @endphp
    
        @foreach ($images as $image)
      
            @if ($trip->id==$image->trip_id and $count==0)
                
            <td> <img src="{{asset('storage/'.$image->image)}}" alt="Main Image" class="img-fluid"> </td>
            @php
            $count=1
        @endphp
            @endif
            
        @endforeach
    </div>
    
    <div class="col-lg-6">
        <div class="p-4 my-4">
            <h2>Trip Facts</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Destination: <span class="font-weight-bold">{{$trip->destination}}</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Trip Difficulty: <span class="font-weight-bold">{{$trip->trip_difficulty}}</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Trip Style: <span class="font-weight-bold">{{$trip->trip_style}}</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Transport: <span class="font-weight-bold">
                        
                        @foreach (unserialize($trip->transport) as $item)
                        {{$item}}
                    @endforeach  </span></p>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Accommodation: <span class="font-weight-bold">Hotel / Guest House / Lodge</span></p>
                </div>
                
            </div>
        </div>
    </div>
</div>
<hr>
=======
@section('content')
<div class="container card mt-2 p-3">
>>>>>>> e572fdcef69acdef15fa1a4eeae6d3687cf7c236
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

        <label for="gmail"><strong><strong> Destination: {{$trip->destination}}</strong></label>
          <input type="hidden" id="trip_id" name="trip_id" value="{{$trip->id}}">

                        
        </div>
       
      
        <div class="form-group">
            <label for="date">Trip Date</label>
            <input class="form-control" type="text" name="trip_date" id="trip_date">
        </div>
   
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" placeholder="phone_number" type="phone_number" name="phone_number" id="phone_number">
        </div>
        <div class="form-group">
            <label for="extra">Extra Requirements</label>
            <textarea class="form-control" id="extra" type="extra" name="extra" placeholder="extra"></textarea>
        </div>
        <input  type="submit" value="Confirm Booking" class="btn btn-primary">
        
    </form>
</div>
@endsection