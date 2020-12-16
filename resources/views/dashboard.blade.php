@extends('layouts.app')

@section('css')

<link rel="stylesheet" type="text/css" href="css/dashboard.css">
@endsection

@section('content')
@can('update-photo',$images)
  
            
<a href="/photo/2" class="btn btn-primary rounded-0 px-15 py-0_5 float-right"> Change this picture <i class="fas fa-edit"></i></a>
</div>
@endcan 

@foreach ($extra as $image)
 @if($image->category=='dashprofile')

<section class="header-section" style="background-image:url({{asset('storage/'.$image->image)}});">
  
@endif
@endforeach
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
    <div class="owl-carousel owl-theme">
      @foreach($trips as $trip)
      @php
        $count=0; 
        @endphp
        @foreach ($images as $image)
        
        @if ($trip->id==$image->trip_id and $count==0)
       
        
        
          <div class="card">
            <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{$trip->title}}</h5>
              {{-- <p class="card-text">description if needed</p> --}}
              
              <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
       
            </div>
      
        </div>
        @php
        $count=1
       @endphp
       @endif
        @endforeach
        @endforeach 
      </div>
  </div>
  <div class="heading">
    <h1>Recomended</h1>
  </div>
  
  
    <div class="row">
      <div class="owl-carousel owl-theme">
        @foreach($trips as $trip)
        @php
          $count=0; 
          @endphp
          @foreach ($images as $image)
          
          @if ($trip->id==$image->trip_id and $count==0)
         
          
          
            <div class="card">
              <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$trip->title}}</h5>
                {{-- <p class="card-text">description if needed</p> --}}
                
                <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
         
              </div>
        
          </div>
          @php
          $count=1
         @endphp
         @endif
          @endforeach
          @endforeach 
        </div>
    </div>
    
  <div class="heading"> 
  <h2>Most visited Places</h2>

</div>

<div class="owl-carousel owl-theme">
  @foreach($trips as $trip)
  @php
    $count=0; 
    @endphp
    @foreach ($images as $image)
    
    @if ($trip->id==$image->trip_id and $count==0)
   
    
    
      <div class="card">
        <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
        <div class="card-body">
          <h5 class="card-title">{{$trip->title}}</h5>
          {{-- <p class="card-text">description if needed</p> --}}
          
          <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
   
        </div>
  
    </div>
    @php
    $count=1
   @endphp
   @endif
    @endforeach
    @endforeach 
  </div>

  <div class="heading">
    <h1>Cheap Destination</h1>
  </div>
  
  
    <div class="row">
      <div class="owl-carousel owl-theme">
        @foreach($trips as $trip)
        @php
          $count=0; 
          @endphp
          @foreach ($images as $image)
          
          @if ($trip->id==$image->trip_id and $count==0)
         
          
          
            <div class="card">
              <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">{{$trip->title}}</h5>
                {{-- <p class="card-text">description if needed</p> --}}
                
                <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-primary br-5">Book now</a>
         
              </div>
        
          </div>
          @php
          $count=1
         @endphp
         @endif
          @endforeach
          @endforeach 
        </div>
    </div>
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
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/owl.css') }}" />
<style>


.container{
    padding:20px;
    margin: 20px;
  }
  
  </style>
@endsection
@section('scripts')
<style>
 
 .owl-carousel .item {
    height: 100rem;
    background: #4DC7A0;
    padding: 1rem;
  }

  .owl-carousel .item h4 {
    color: #FFF;
    font-weight: 400;
    margin-top: 0rem;
   }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css"/>
  <script>
  jQuery(document).ready(function($){
    $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      
     
      autoplay:true,
      stagePadding:50,
      responsive:{
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      }
    })
  })
  </script>
@endsection