

@extends('layouts.app')
@section('dash')
    <h3>dashboard</h3>

    <div class="list-group list-group-flush">
      <li  class="list-group-item">

        <a href="{{route("tripdetail.create")}}" class="text-center">Add Package</a>
      </li>
    
    <li  class="list-group-item">
      <a href="{{route("tripdetail.index")}}"  class="text-center">All Package</a>
    </li>
    </div>
@endsection
@section('form')
<div class="container my-4">
  <div class="d-flex justify-content-center">
    {!! $trips->links() !!}
  </div>
  <div class="table-responsive">
    <table class="table table-dark">
        <thead>
            <tr>
              <th scope="col">SN</th>
              <th scope="col">Package Image</th>
              <th scope="col">Pacakage name</th>
              <th scope="col">price</th>
              <th scope="col">Action</th>
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
            <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail</a>
        </td>
                <td> 
        <a href="{{route('tripdetail.edit',$trip->id)}}" class="btn btn-success ">edit</a>
        </td>
        <td>
          <a href="{{route('tripdetail.photo',$trip->id)}}" class=" btn btn-light ">Add Image</a>
        </td>
        <td>
        <form action="{{route('tripdetail.destroy',$trip->id)}}" method="POST">
            @csrf
            @method('DELETE')
           
              <button type="submit" class="btn btn-danger"> Delete</button>
            
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