@extends('layouts.app')

@section('content')
    <main id="main">
        
        @can('update-photo',$images)
        
            
            <a href="/photo/0" class="btn btn-primary rounded-0 px-15 py-0_5 float-right"> Edit <i class="fas fa-edit"></i></a>
    </div>
        @endcan 
    
        <div class="main-wrapper">
           
            <div id="carouselExampleControls"  class="carousel slide z-depth-1-half" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="text-wrapper">
                        <h1 >
                            Think about the
                            Traveler Way
                        </h1>
                        <div class="container col-sm-12 col-md-6 ">
                        <p>
                            Talk To Our Experts and Get Your Dream Home Done. If you dream
                            of designing a new home that takes full advantage of the unique
                            geography and views of land that you love Talk To Our Experts
                            and Get Your Dream Home Done. If you dream of designing a new
                        </p>
                    </div>  
                   <div class="anchor">
                    <a href="{{route('dashboard')}}" class="btn btn-primary rounded-0 px-15 py-0_5">Explore now</a>
                </div>  
                </div>

                    @php
                      $pos=0;
                   @endphp

                    @foreach ($images as $image)
                    @if($image->category == 'carousel')
                    @if ($pos==0 )
                    <div class="carousel-item active">
                    <img src="{{asset('storage/'.$image->image)}}" class="d-block w-100" alt="...">
                    </div>
                    @php
                  $pos=$pos+1;
      
                  @endphp
                    @else
                    <div class="carousel-item">
                        <img src="{{asset('storage/'.$image->image)}}" class="d-block w-100" alt="...">
                        </div>
                    @endif
                @endif
                @endforeach
                  
                 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              
            </div>
        </div>
        
        {{-- <div class="hero-section d-flex" style="background-image: url('sourceimages/traveller nepal.jpg'); ">
            <div class="container ">
                <div class="text-wrap text-white">
                    <h1>
                        Think about the
                        Traveler Way
                    </h1>
                    <p>
                        Talk To Our Experts and Get Your Dream Home Done. If you dream
                        of designing a new home that takes full advantage of the unique
                        geography and views of land that you love Talk To Our Experts
                        and Get Your Dream Home Done. If you dream of designing a new
                    </p>
                </div>
                <a href="#" class="btn btn-primary rounded-0 px-15 py-0_5">Explore now</a>
            </div>
        </div> --}}

        <div class="our-services d-flex mt-15">
           
            <div class="container">
                    
                <div class="d-flex justify-content-center mb-0_8">
                    <h2>Our Services</h2>
                        {{-- @can('update-photo',$images)
                        <div class="mx-30 text-center">
                        <a href="/photo/1" class="btn btn-primary rounded-0 px-15 py-0_5 float-left text-center"><h4> <i class="fa fa-plus" aria-hidden="true"></i>  Edit Category</h4></a>
                        </div>
                        @endcan  --}}
                </div>
                <div class="row">
                    <!-- column 1 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-wrap" style="background-image: url('sourceimages/traveller1.jpg');">
                                </div>
                                <div class="card-body mt-0_6">
                                    <h4 class="card-title">Adventure</h4>
                                    <p class="card-text mb-0_4">An adventure is an exciting experience that is typically bold, sometimes risky, undertaking. Adventures may be activities with some potential for physical dange, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="{{route('category','adventure')}}" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-wrap" style="background-image: url('sourceimages/traveller2.jpg');">
                                </div>
                                <div class="card-body mt-0_6">
                                    <h4 class="card-title">Trek</h4>
                                    <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                        totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="{{route('category','trek')}}" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 3 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-wrap" style="background-image: url('sourceimages/traveller3.jpg');">
                                </div>
                                <div class="card-body mt-0_6">
                                    <h4 class="card-title">Short Trip</h4>
                                    <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                        totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="{{route('category','trip')}}" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                   
                       
                    

                </div>
            </div>
        </div>
       
        <div class="question mt-30">
             @can('update-photo',$images)
        
                    <a href="/photo/1" class="btn btn-primary rounded-0 px-15 py-0_5 float-left"> Edit <i class="fas fa-edit"></i></a>
            
                @endcan 
            <div class="row two-column">
                @foreach ($images as $image)
                @if($image->category == 'about')
                
                <div class="col-sm-12 col-md-6 img-wrap"
                    style="background-image: url({{asset('storage/'.$image->image)}});">
                   
                </div>
                @endif
                @endforeach 
                <div class="colsm-12 col-md-6 mb-30">
                    <div class="text-wrap p-45">
                        <h2 class="my-30">Why Nepal?</h2>
                        <p class="my-15">Nepal is a country of contrasts. Spectacular natural riches combine with a vibrant culture and sense of history. Home to ten of the world's 14 highest mountains, the country offers a magnificent setting for hiking and mountaineering, as well as some of the world's best white water rafting.</p>
                        <p class="my-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam
                            minima
                            praesentium
                            sapiente? Aliquid sit deserunt deleniti quaerat, eaque, doloribus magnam dolores,
                            voluptatibus
                            tenetur dolorum optio eligendi unde enim accusamus?</p>
                            <a href="{{route('dashboard')}}" class="btn btn-primary rounded-0 px-15 py-0_5">Lets go</a>
                    </div>
                </div>
            </div>
        </div>

      

        
      
    </main>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

@section('css')
<style>
.carousel-inner{
    position: relative;
}

.text-wrapper{
    position: absolute;
    top: -30%;
    left: 0px;
    z-index: 9;
    margin:20%;
    color: wheat;
    align-content: center;
}

.text-wrapper h1{
    
    font-family: "Lobster", serif;
    text-align: center;
    padding: 10%;
}
.anchor {
    padding: 5%;
    text-align: center;
}
.carousel-inner{
  width:100%;
  max-height: 750px !important;
}
</style>
@endsection
