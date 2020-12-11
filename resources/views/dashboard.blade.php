

@extends('layouts.app')

@section('css')

<link rel="stylesheet" type="text/css" href="css/dashboard.css">
@endsection

@section('content')
<section class="header-section">
<h1>Travel Across The nepal</h1>
<p>Welcome To Nepal </p>
<div class="input-group">
    <input type="text" class="form-control" placeholder="Search city" name="" aria-label="" aria-describedby="basic-addon1">
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary btns" style="border-radius: 25px;">Search</button>
    </div>
</div>
</section>

<div class="container py-4">
<div class="heading">
  <h1>Destination Booking</h1>
</div>


  <div class="row">
    @foreach($trips as $trip)
    @php
      $count=0; 
      @endphp
      @foreach ($images as $image)
      
      @if ($trip->id==$image->trip_id and $count==0)
     
      
      <div class="col-lg-4 col-md-6 col-sm-6 my-3">
        <div class="card">
          <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title">{{$trip->title}}</h5>
            {{-- <p class="card-text">description if needed</p> --}}
            
            <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
     
          </div>
        </div>
      </div>
      @php
      $count=1
     @endphp
     @endif
      @endforeach
      @endforeach 
<div class="heading"> 
  <h2>Most visited Places</h2>

</div>

@foreach($trips as $trip)
@php
  $count=0; 
  @endphp
  @foreach ($images as $image)
  
  @if ($trip->id==$image->trip_id and $count==0)
 
  
  <div class="col-lg-4 col-md-6 col-sm-6 my-3">
    <div class="card">
      <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$trip->title}}</h5>
        {{-- <p class="card-text">description if needed</p> --}}
        
        <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
 
      </div>
    </div>
  </div>
  @php
  $count=1
 @endphp
 @endif
  @endforeach
  @endforeach


{{-- <div class="row">
  @foreach ($trips as $trip)
  <div class="card">
    <div class="card-header">
      
      <h1> {{$trip->id}} </h1>
      <h1> {{$trip->title}} </h1>
     
      <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
      </div>
    <div class="card-body">
      <a href="{{route('tripdetail.show',$trip->id)}}" class="btn">Book Now</a>
        </div>
      </div>
      @endforeach  
    </div>
  </div>
  <div class="heading"> 
    <h2>Most visited Places</h2>
  
  </div>
  <div class="image-container">
    @foreach ($trips as $trip)
      <div class="image">

        <h1> {{$trip->title}} </h1>
        <h3>NRP:{{$trip->price_low}} </h3>
       <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
       <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail</a>
      
    </div>
    @endforeach
  </div> --}}
  
@endsection

@section('footer')
    @include('layouts.footer')
@endsection