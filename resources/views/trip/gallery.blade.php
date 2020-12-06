
@extends('layouts.app')


@section('gallery')
@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="list-group">
<li class="list-group-item alert alert-warning ">
    
        {{  $error}}
    
    
</li>
</div>
 
@endforeach
@endif

    <div class="container">
        <div class="title m-4">
            <div class="row">
                <div class="col-md-8">
    <h2 class="text-center"> Image Gallery of {{$title->title}}</h2>
<h4 class="text-center">Add Delete section</h4>
</div>
<div class="col-md-4">
    <form action="{{route('tripdetail.photostore')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="form-group">
        <div class="row">
    
           
               <div class="form-control">
               <input type="hidden" id="trip_id" name="trip_id" value="{{$title->id}}">
                  
                   <input type="file" id="image" name="image">
                          
                </div>
               
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success ">upload</button>
                    </div>
                
            
    
        </div>
        </div>
    </form>
</div>
</div>
</div>
@foreach($images as $item)
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="img_5terre.jpg">
      <img src="{{asset('storage/'.$item->image)}}" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">
        <div class="row justify-content-center">
        <a href="{{asset('storage/'.$item->image)}}" target="blank" class="btn btn-info btn-sm mr-2">full view</a>

      
       

        <form action="{{route('tripdetail.photodelete',$item->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" id="trip_id" name="trip_id" value="{{$title->id}}">
          <button type="submit"  class="btn btn-danger btn-sm "> Delete</button>
        
    </form>  
    </div>
</div>
  </div>
</div>

@endforeach

<div class="clearfix"></div>
</div>
@endsection










@section('css')
<style>
    div.gallery {
      border: 1px solid #ccc;
    }
    
    div.gallery:hover {
      border: 1px solid #777;
    }
    
    div.gallery img {
      width: 100%;
      height: auto;
    }
    
    div.desc {
      padding: 15px;
      text-align: center;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .responsive {
      padding: 0 6px;
      float: left;
      width: 24.99999%;
    }
    
    @media only screen and (max-width: 700px) {
      .responsive {
        width: 49.99999%;
        margin: 6px 0;
      }
    }
    
    @media only screen and (max-width: 500px) {
      .responsive {
        width: 100%;
      }
    }
    
    .clearfix:after {
      content: "";
      display: table;
      clear: both;
    }
    </style>
@endsection

