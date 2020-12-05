@extends('layouts.app')



@section('index')


<div class="container">

    <h1 class="display-4 text-center">{{$title->title}}</h1>

    @foreach ($images as $item) 
            <div class="d-flex  justify-content-center">
                <div class="card-group">
                    <div class="card">
                <div >
                    <div class="card-body">
                  <img src="{{asset('storage/'.$item->image)}}" class="img-responsive" style="height: 300px;
            width: auto;">
         </div>
        </div>
        </div>
        </div>
    </div>
    @endforeach
</div>



<div class="container">
<form action="{{route('tripdetail.photostore')}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
    <div class="row">

        <div class=" col-md-4 xl-5 xs-5 d-flex  justify-content-center m-4">
           <div class="form-control">
           <input type="hidden" id="trip_id" name="trip_id" value="{{$item->trip_id}}">
               <label for="myfile">Select a file:</label>
               <input type="file" id="image" name="image"><br><br>
   
                
            </div>
            <div class="form-control">

                <button type="submit" class="btn btn-success">upload</button>
            </div>
            
        </div>

    </div>
    </div>
</form>
</div>
@endsection