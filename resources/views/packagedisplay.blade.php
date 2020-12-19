@extends('layouts.app')

@section('content')
    <div class="container py-4">
       
            <div class="row">
                @if(count($trips)<1)
                <div class="container text-center">
          <i class="fas fa-exclamation-circle"><h1 class="bg-warning mx-100">  </i>   No record so Far</h1>
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
                            <h5 class="card-title font-weight-bold">Price: Rs {{$trip->price_low}}</h5>
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
        {{ $trips->links() }}
    </div>
@endsection


@section('css')
    <style>

        .header-section {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url("images/bg.jpg");
    height: 500px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    padding-top: 20px;
    text-align: center;
    color: #fff;
}
/* .header-section img {
    width: 170px;
    float: left;
} */

.header-section h1 {
    padding-top: 230px;
    padding-bottom: 0;
    font-size: 55px;
}
.header-section p {
    margin: 18px 0;
}

.input-group {
    max-width: 500px;
    border-radius: 30px;
    background: #fff;
    margin: auto;
    padding: 2px;
}
.form-control {
    border: 0;
    border-radius: 30px;
    margin: 2px;
    box-shadow: none;
}

/*feature section gedes*/

.heading {
    text-align: center;
    font-size: 30px;
    margin-bottom: 50px;
   
}

/* .row {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    flex-flow: wrap;
} */

.card:hover {
    transform: scale(1.05);
    box-shadow: 0 0 40px -10px rgba(0, 0, 0, 0.5);
}

/* @media screen and (max-width: 620px) {
    .heading {
        padding: 20px;
        font-size: 20px;
    }
} */
/* footer */
/* @import url("http://fonts.googleapis.com/css?family=Open+Sans:400,700");
header-section {
    text-align: center;
    padding-top: 100px;
    margin-bottom: 190px;
}
header-section h1 {
    font: normal 32px/1.5 "Open Sans", sans-serif;
    color: #3f71ae;
    padding-bottom: 16px;
}
header-section h2 {
    color: #f05283;
}
header-section span {
    color: #3f71ea;
} */

/* responsive footer */

/* @media (max-height: 800px) {
    header-section {
        padding-top: 40px;
    }
}
.image-container {
    position: relative;
    column-count: 4;
    padding: 20px;
}
.image {
    display: inline-block;
    margin-bottom: 10px;
    overflow: hidden;
}
.image img {
    width: 100%;
    transition: 0.25s ease-in-out;
}
.image:hover img {
    transform: scale(1.1);
}
.image h1 {
    position: absolute;
    padding: 5px;
    margin: 5px;
    font-size: 25px;
    background: #5c5c5c;
    color: #fff;
    border-radius: 5px;
    opacity: 0;
    z-index: 1;
    transition: 0.25 ease-in-out;
}
.image:hover h1 {
    opacity: 0.5;
}
@media screen and (max-width: 1024px) {
    h1 {
        font-size: 20px;
    }
}
@media screen and (max-width: 768px) {
    .image-container {
        column-count: 3;
    }
}
@media screen and (max-width: 425px) {
    .image-container {
        column-count: 2;
    }
    h1 {
        font-size: 12px;
    }
}
@media screen and (max-width: 375px) {
    .image-container {
        column-count: 1;
    }
    h1 {
        font-size: 12px;
    }
} */
</style>
@endsection