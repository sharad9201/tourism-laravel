@extends('layouts.app')

@section('content')
<div class="container">
<h1 class="text-center">Search section <i class="fas fa-search"></i></h1>
<form action="search"method="GET" role="search">
    <div class="input-group">
        
          
        <input type="text" class="form-control" placeholder="Search places" name="query" aria-label="" aria-describedby="basic-addon1" required/>
        <div class="input-group-append">
          <button type="submit" class="btn btn-primary btns"  style="border-radius: 25px;">Search</button>
        </div>
      </div>
      
    </form>
</div>
    <div class="container py-4">
        
        
            <div class="row">
                @if(count($trips)<1)
                <div class="container text-center">
                    <div class="container justify-content-center my-30">
          <h2 class="bg-warning mx-100">  <i class="fas fa-exclamation-circle"> </i>   No record so Far</h2>
        </div>        
        </div>
                @endif
                  @foreach($trips as $trip)
                  @php
                    $count=0; 
                    @endphp
                    @foreach ($images as $image)
                    
                    @if ($trip->id==$image->trip_id and $count==0)
                   
                    
                    
                    <div class="col-sm-6 col-md-4">
                      <div class="card">
                        <img src="{{asset('storage/'.$image->image)}}" alt="pokhara" class="card-img-top" style="height">
                        <div class="card-body">
                          <h5 class="card-title font-weight-bold">{{$trip->title}}</h5>
                          <h5 class="card-title font-weight-bold">Price: RS {{$trip->price_low}}</h5>
                          <p class="card-text">{!! $trip->higlight !!}</p>
                          
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
                 
        </div>
       
    </div>
@endsection
