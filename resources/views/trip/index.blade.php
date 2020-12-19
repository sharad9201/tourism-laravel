

@extends('layouts.app')
@section('dash')
    {{-- <h3>dashboard</h3>

    <div class="list-group list-group-flush">
      <li  class="list-group-item">

        <a href="{{route("tripdetail.create")}}" class="text-center">Add Package</a>
      </li>
    
    <li  class="list-group-item">
      <a href="{{route("tripdetail.index")}}"  class="text-center">All Package</a>
    </li>
    </div> --}}
    <h3 class='text-center'>dashboard <i class="fas fa-columns"></i></h3>
  
    
    <div class="card text-center">
      <a href="{{route("tripdetail.create")}}" class="card-header text-white bg-primary px-10">Add Package  <i class="fas fa-plus-square"></i></a>
    </div>
    <div class="card text-center">
      <a href="{{route("booking.index")}}" class="card-header text-white bg-primary px-10">All Booking  <i class="fas fa-ticket-alt"></i> </a>
    </div>
    <div class="card text-center">
      <a href="{{route("admin.users.index")}}" class="card-header text-white bg-primary px-10">All Uesr  <i class="fas fa-users"></i></a>
    </div>
@endsection
@section('form')
<div class="container my-4">
  <div class="d-flex justify-content-center">
   <h3 class="text-center bg-info">All Package Listing</h3>
  </div>
  <div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Package Image</th>
              <th scope="col">Pacakage name</th>
              <th scope="col">price</th>
              <th scope="col ">Action</th>
            </tr>
          </thead>
        <tbody>
        @foreach ($trips as $trip)
        <tr>
        <td> {{$trip->id}}</td>
        @php
        $count=0; 
       @endphp
        @foreach ($images as $image)
      
            @if ($trip->id==$image->trip_id and $count==0)
                
            <td> <img src="{{asset('storage/'.$image->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px"> </td>
            @php
            $count=1
        @endphp
            @endif
            
        @endforeach
        <td>{{$trip->title}} </td>
        <td>{{$trip->price_low}} </td>
        <td>
            <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail <i class="fas fa-info-circle"></i><a>
        </td>
                <td> 
        <a href="{{route('tripdetail.edit',$trip->id)}}" class="btn btn-success ">edit <i class="fas fa-edit"></i></a>
        </td>
        <td>
          <a href="{{route('tripdetail.photo',$trip->id)}}" class=" btn btn-light ">Add Image <i class="fas fa-plus-square"></i></a>
        </td>
        <td>
        <form action="{{route('tripdetail.destroy',$trip->id)}}" method="POST">
            @csrf
            @method('DELETE')
           
              <button type="submit" class="btn btn-danger"> Delete <i class="fas fa-trash-alt"></i></button>
            
            </form>  
        </td>
        </tr>
        @endforeach

</div>  

        </tbody>
    </table>
  </div>
    <div class="d-flex justify-content-center">
      {!! $trips->links() !!}
    </div>
    </div>

     
@endsection


{{-- @section('css')
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
@endsection --}}