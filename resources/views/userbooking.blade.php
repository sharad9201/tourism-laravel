@extends('layouts.app')

@section('index')
@php
     $date=date_create(date("m/d/Y")); 
     
@endphp

<div class="container my-4 overflow-hidden">
<h2 class="text-center color-green text-success font-weight-bold">All Bookings</h2>    
    
    {{-- <h1> {{$trip->title}}</h1> 
    <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid"> 
 --}}
 <ul class="nav nav-tabs">
    <li class="nav-item" >
        <a href="#current" data-toggle="tab" role="tab" class="nav-link active">Booked</a>
    </li>
    
    @can('update-photo')
    <li class="nav-item">
      <a href="#progress" data-toggle="tab" role="tab" class="nav-link">Progress</a>
  </li>
  <li class="nav-item">
      <a href="#completed" data-toggle="tab" role="tab" class="nav-link">Completed</a>
  </li>
  @endcan
  <li class="nav-item">
    <a href="#canceled" data-toggle="tab" role="tab" class="nav-link">Canceled</a>
</li>
</ul>


<div class="tab-content">
    <div role="tabpanel" class="tab-pane overflow-hidden active" id="current">
      
           
        @foreach($destinations as $destination )
        @if(!$status->contains('destination_id',$destination->id))
        {{-- @foreach($trips as $trip) --}}
        {{-- @foreach ($destinations as $destination ) --}}
        <div class="card p-4 my-4 overflow-hidden">
           {{-- {{dd($destinations)}} --}}
           {{-- {{dd($destination->trip)}} --}}
        
           <h2 class="bg-success">Journey to {{$destination->trip->title}}</h2>
          
           
           <div class="row"> 
               
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Full_name: <span class="font-weight-bold">{{$destination->Full_name}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Phone: <span class="font-weight-bold">{{$destination->phone_number}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->trip->destination}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Email: <span class="font-weight-bold">{{$destination->gmail}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">TripDate: <span class="font-weight-bold">{{$destination->trip_date}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <button class="btn btn-danger" onClick="cancelBookings()" data-bs-toggle="modal" data-bs-target="#cancelBooking">
                       Cancel this Trip
                     </button></span></p>


                   <form action="{{route('userbookingcancel',$destination->id)}}" method="POST">
                       @csrf
                       
                       
                      
                         
                         <!-- Modal -->
                         <div class="modal fade" id="cancelBooking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                             <div class="modal-content">
                               <div class="modal-header" style="background-color: rgb(13, 126, 97);
                                   
                               ">
                                 <h5 class="modal-title align-item-center"  id="cancelBookingLabel">Cancel Booking</h5>
                                 <button type="button"  onclick="handleCancel()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                               </div>
                               <div class="modal-body">
                                 Are you sure to cancel Booking of 
                                 
                                 {{$destination->trip_date}} trip to {{$destination->trip->destination}}
                               </div>
                               <div class="modal-footer">
        
                                 <button type="button" onclick="handleCancel()" class="btn btn-secondary bg-green" data-bs-dismiss="modal">Close</button>
                                 <button type="submit"  class="btn btn-danger">Cancel Booking</button>
                               </div>
                             </div>
                           </div>
                         </div>
                   </form>
               </div>
                 
              
               
           </div>
           
        </div>
        @endif
        @endforeach
    </div>  

{{-- canceled --}}
          
      <div role="tabpanel" class="tab-pane" id="canceled">
        @foreach($destinations as $destination )
        @if($status->contains('destination_id',$destination->id))
        {{-- @foreach($trips as $trip) --}}
        {{-- @foreach ($destinations as $destination ) --}}
        <div class="card p-4 my-4 overflow-hidden">
           {{-- {{dd($destinations)}} --}}
           {{-- {{dd($destination->trip)}} --}}
      
           <h2 class="bg-success">Journey to {{$destination->trip->title}}</h2>
          
           
           <div class="row"> 
               
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Full_name: <span class="font-weight-bold">{{$destination->Full_name}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Phone: <span class="font-weight-bold">{{$destination->phone_number}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->trip->destination}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">Email: <span class="font-weight-bold">{{$destination->gmail}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
                   <p class="m-1">TripDate: <span class="font-weight-bold">{{$destination->trip_date}}</span></p>
               </div>
               <div class="col-lg-4 col-md-6 col-sm-12">
            </div>
           </div>
        </div>
        @endif
        @endforeach
      </div>
     
      
      
        <div role="tabpanel" class="tab-pane " id="progress">

            @foreach($destinations as $destination )
            {{-- {{dd($destination->trip_date)}} --}}
           
           @php
        $date=date_create(date($destination->trip_date)); 
      date_add($date,date_interval_create_from_date_string($destination->trip->day.' days'));
      $dateh= date_format($date,"Y/m/d");
        
      $date1=date_create(date("Y/m/d")); 
      date_add($date1,date_interval_create_from_date_string('0 days'));
      $datel=date_format($date1,"Y/m/d");
     

      @endphp
                {{-- {{dd(strtotime($destination->trip_date) < strtotime($dateh),strtotime($destination->trip_date) > strtotime($datel) )}} --}}
                {{-- {{dd($destination->trip_date > date_create(date("m/d/Y"))&&($destination->trip_date < $dates)) }} --}}
            
            @if(strtotime($destination->trip_date) < strtotime($dateh) && strtotime($destination->trip_date) > strtotime($datel) && !$status->contains('destination_id',$destination->id))

            {{-- @foreach($trips as $trip) --}}
            {{-- @foreach ($destinations as $destination ) --}}
            <div class="card p-4 my-4 overflow-hidden">
               {{-- {{dd($destinations)}} --}}
               {{-- {{dd($destination->trip)}} --}}
          
               <h2 class="bg-success">Journey to {{$destination->trip->title}}</h2>
              
               
               <div class="row"> 
                   
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Full_name: <span class="font-weight-bold">{{$destination->Full_name}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Phone: <span class="font-weight-bold">{{$destination->phone_number}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->trip->destination}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Email: <span class="font-weight-bold">{{$destination->gmail}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">TripDate: <span class="font-weight-bold">{{$destination->trip_date}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       
    
                       
                   </div>
                     
                  
                   
               </div>
               
            </div>
            @endif 
            @endforeach
             
        </div> 
      



            {{-- //completed --}}
        <div role="tabpanel" class="tab-pane " id="completed">
            @foreach($destinations as $destination )
            
            @php
         $date=date_create(date($destination->trip_date)); 
       
      date_add($date,date_interval_create_from_date_string($destination->trip->day.' days'));
      $dateh= date_format($date,"Y/m/d");
      
      $date1=date_create(date("Y/m/d")); 
      date_add($date1,date_interval_create_from_date_string('0 days'));
      $datel=date_format($date1,"Y/m/d");
     

      @endphp
                {{-- {{dd(strtotime($destination->trip_date) < strtotime($dateh),strtotime($destination->trip_date) > strtotime($datel) )}} --}}
                {{-- {{dd($destination->trip_date > date_create(date("m/d/Y"))&&($destination->trip_date < $dates)) }} --}}
           

            @if(strtotime($destination->trip_date) < strtotime($datel) && !$status->contains('destination_id',$destination->id))

            {{-- @foreach($trips as $trip) --}}
            {{-- @foreach ($destinations as $destination ) --}}
            <div class="card p-4 my-4 overflow-hidden">
               {{-- {{dd($destinations)}} --}}
               {{-- {{dd($destination->trip)}} --}}
          
               <h2 class="bg-success">Journey to {{$destination->trip->title}}</h2>
              
               
               <div class="row"> 
                   
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Full_name: <span class="font-weight-bold">{{$destination->Full_name}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Phone: <span class="font-weight-bold">{{$destination->phone_number}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Destination: <span class="font-weight-bold">{{$destination->trip->destination}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">Email: <span class="font-weight-bold">{{$destination->gmail}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       <p class="m-1">TripDate: <span class="font-weight-bold">{{$destination->trip_date}}</span></p>
                   </div>
                   <div class="col-lg-4 col-md-6 col-sm-12">
                       
    
                       
                   </div>
                     
                  
                   
               </div>
               
            </div>
            @endif 
            @endforeach
             
      </div>
      
</div>



    


@endsection
@section('scripts')
<script>
    function cancelBookings(){
        
        $('#cancelBooking').modal('show');
    }
    function handleCancel()
    {
        $('#cancelBooking').modal('hide');
    }
</script>
@endsection