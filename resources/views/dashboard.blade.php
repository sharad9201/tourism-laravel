@extends('layouts.app')

@section('css')
    
<link rel="stylesheet" type="text/css" href="css/dashboard.css">

<style>
  .card-img-top{
    height: 258px;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
@endsection

@section('content')
<section class="header-section">
<h1>Travel Across The nepal</h1>
<p>Welcome To Nepal </p>
<form action="/search" method="GET">
<div class="input-group">
    <input type="search" class="form-control" placeholder="Search city" name="search" >
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary btns" style="border-radius: 25px;">Search</button>
    </div>
</div>
</form>
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
  @foreach ($trip->image as $image)
  
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

  <div class="col-lg-4 col-md-6 col-sm-6 my-3">
    <div class="card">
      <img src="https://th.bing.com/th/id/OIP.Q03QzwiU0XKCTdiGogMiMAHaDe?w=331&h=164&c=7&o=5&dpr=1.25&pid=1.7" alt="pokhara" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$trip->title}}</h5>
        {{-- <p class="card-text">description if needed</p> --}}
        
        <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
      </div>
    </div>
  </div>
</div>

<div class="heading"> 
  <h2>Most visited Places</h2>

</div>

@foreach ($trips as $trip)
  <div class="col-lg-4 col-md-6 col-sm-6 my-3">
    <div class="card">
      <img src="{{asset($trip->image)}}" alt="pokhara" class="card-img-top">
      <div class="card-body">
        <h5 class="card-title">{{$trip->title}}</h5>
        {{-- <p class="card-text">description if needed</p> --}}
        
        <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary">Book now</a>
      </div>
    </div>
  </div>
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
    
    <div class="row">
     
      @foreach ($trips as $trip)
      
      <div class="card">
        <div class="card-header">
         
          {{-- <h1> {{$trip->id}} </h1> --}}
          {{-- <h1> {{$trip->title}} </h1>
         
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
          </div>
          <div class="card-body"> --}}
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p> --}}
          {{-- <a href="{{route('tripdetail.show',$trip->id)}}" class="btn">Book Now</a> 
         
        </div>
        
      </div> --}}
     
      {{-- <div class="card">
        <div class="card-header">
          <h1> {{$trip->id}} </h1>
          <h1> {{$trip->title}} </h1>
         
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
                 </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
        </div>
      </div> --}}
      {{-- <div class="card">
        <div class="card-header">
          <img src="https://www.eyesonnepal.com/wp-content/uploads/2015/03/Tibet-Nepal-Tours.jpg">
        </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
        </div>
      </div> --}}
      {{-- <div class="card">
        <div class="card-header">
          <img src="https://www.nepaltours.com/wp-content/uploads/2019/01/1522848_458752154225670_762148131_o.jpg">
        </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
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
         <h1> {{$trip->title}} </h1>
          <h3>NRP:{{$trip->price_low}} </h3>
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
        {{-- @endforeach --}}
        
      {{-- </div>
      <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail</a>
      @endforeach --}}
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.adventurewhitehimalaya.com/wp-content/uploads/2020/05/lumbini.jpg">
      </div> --}}
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.eyesonnepal.com/wp-content/uploads/2015/03/Tibet-Nepal-Tours.jpg">
      </div>
      <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://cdn.traveltalktours.com/wp-content/uploads/2017/01/Essential-Nepal-thumb-360x225.jpg">
      </div> --}}
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://tigerencounter.com/wp-content/uploads/2019/11/Chitwan-NP.jpg">
      </div>
     <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.nepaltours.com/wp-content/uploads/2019/01/1522848_458752154225670_762148131_o.jpg">
      </div>     
      <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://glaciernepaltreks.com/images/trip/annapurna-base-camp-trek-1582610267.jpg">
      </div> --}}
     {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://enlightentrip.com/images/package/C15663129550.jpeg">
      </div>   --}}
      
    {{-- </div>
    @endforeach
  </div>  --}}

@endsection

@section('footer')
    @include('layouts.footer')
@endsection