@extends('layouts.app')
@section('dash')
    <h3>dashboard</h3>
    <div class="card">
      <a href="{{route("tripdetail.create")}}" class="card-header  text-white bg-primary ">Add Package</a>
    </div>
    <div class="card">
      <a href="{{route("tripdetail.index")}}" class="card-header text-white bg-primary ">All Package</a>
    </div>
@endsection
@section('form')
<div class="container my-4">
  <div class="d-flex justify-content-center">
    {!! $trips->links() !!}
  </div>
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
        {{-- {{dd($trip->image)}} --}}
        <tr>
        <td> {{$trip->id}}</td>
        <td> <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px"> </td>
        <td>{{$trip->title}} </td>
        <td>{{$trip->price_low}} </td>
        <td>
            <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail</a>
        </td>
                <td> 
        <a href="{{route('tripdetail.edit',$trip->id)}}" class="btn btn-success ">edit</a>
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
    <div class="d-flex justify-content-center">
      {!! $trips->links() !!}
    </div>
    </div>

     
@endsection