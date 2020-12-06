@extends('layouts.app')

@section('dash')
    <h3>dashboard</h3>
  
    <div class="card text-center">
      <a href="{{route("tripdetail.create")}}" class="card-header  text-white bg-primary ">Add Package</a>
    </div>
    <div class="card text-center">
      <a href="{{route("tripdetail.index")}}" class="card-header text-white bg-primary ">All Package</a>
    </div>
@endsection

@section('form')

   

    <h2 class="text-center">Detail form</h2>
   
<form action="{{isset($trip) ? route('tripdetail.update',$trip->id) : route('tripdetail.store')}}" method="POST" enctype="multipart/form-data">
    @if (isset($trip))
        @method('PUT')
    @endif
    @csrf
    
    <div class="form-group">
                
        <label for="title">title</label>

       
       @error('title')
        <div class="alert alert-warning" role="alert">
          
          {{($errors->get('title')[0])}}
        </div>
        @enderror
       
              
        
    <input type="text" class="form-control" name="title" placeholder="title" value="{{isset($trip)? $trip->title :""}}">
      </div>
            <div class="form-group">

                <label for="Destination">Destination</label>
                @if ($errors->has('destination'))
                <div class="alert alert-warning" role="alert">
                  {{($errors->get('destination')[0]) }}
                </div>
                @endif

                
            <input type="text" class="form-control" name="destination" placeholder="destiantion" value="{{isset($trip)? $trip->destination :""}}">
              </div>
              <div class="form-group">
                <label for="difficulty">Difficulty</label>

                @if ($errors->has('trip_difficulty'))
                  <div class="alert alert-warning" role="alert">
                    {{($errors->get('trip_difficulty')[0]) }}
                  </div>
                    
                @endif
                <select class="form-control" name="difficulty">
                    @if (!isset($trip))
                        <option selected>Choose...</option>
                         <option >easy</option>
                        <option  >Medium</option>
                        <option  >Difficult</option>
                        @else

                        <option  {{$trip->style=="easy"?"selected":""}}>easy</option>
                        <option  {{$trip->style=="medium"?"selected":""}}>Medium</option>
                        <option  {{$trip->style=="hard"?"selected":""}}>Difficult</option>
                        @endif
                  </select>

                  <div class="form-group">
                    <label for="style">style</label>
                    @if ($errors->has('trip_style'))
                    
                    <div class="alert alert-warning" role="alert">
                      {{($errors->get('trip_style')[0]) }}
                    </div>
                @endif
                    
                      <select class="form-control" name="style">
                        @if (!isset($trip))
                        <option selected>Choose...</option>
                        <option >trip</option>
                        <option >trek</option>
                        <option >adventure</option>
                        @else
                       
                        
                        <option {{$trip->style=="trip"?"selected":""}}>trip</option>
                        <option {{$trip->style=="trek"?"selected":""}}>trek</option>
                        <option {{$trip->style=="trek"?"selected":""}}>adventure</option>
                        @endif
                      </select>
                     
                      {{-- image upload section --}}
                      <label >upload picture</label>

                      @if ($errors->has('image'))
                        <div class="alert alert-warning" role="alert">
                          {{($errors->get('image')[0]) }}
                        </div>
                    
                      @endif
                      <div class="input-group mb-3">
                      
                      <div class="col-md-7 mb-2">
                        <img id="image_preview_container" src="{{ asset('storage/image/image-preview.png') }}"
                            alt="preview image" style="max-height: 150px;">
                       </div>
                    
                    <div class="col-md-7">
                      
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image" >
                          
                            
                            
                            </div>
                        </div>
                        
                    </div>



                   <div class="form-group">
                    <label for="form-check">Transport</label>
                    @if ($errors->has('transport'))
                    
                    <div class="alert alert-warning" role="alert">
                      {{($errors->get('transport')[0]) }}
                    </div>
                    @endif


                    <div class="form-inline ">
                        <div class="form-check mr-4 mb-5">
                            @if(isset($trip))
                          
                        <input class="form-check-input" type="checkbox" name="transport[]" value="plane" {{
                            
                         in_array('Aeroplane',unserialize($trip->transport))?"checked":""}}>
                            <label class="form-check-label" for="Plane">Plane</label>
                          </div>

                                                 
                          <div class="form-check mr-4 mb-5">
                    
                            <input class="form-check-input" type="checkbox" name="transport[]" value="bus" {{
                                
                             in_array('bus',unserialize($trip->transport))?"checked":""}}>
                            <label class="form-check-label" for="bus">bus</label>
                          </div>
                          <div class="form-check mr-4 mb-5">
                          <input class="form-check-input" type="checkbox" name="transport[]" value="jeep" {{
                            
                         in_array('jeep',unserialize($trip->transport))?"checked":""}}>
                          <label class="form-check-label" for="bus">jeep</label>
                        </div>
                           <div class="form-check mr-4 mb-5">
                            <input class="form-check-input" type="checkbox" name="transport[]" value="bike"{{
                                
                             in_array('bus',unserialize($trip->transport))?"checked":""}}>
                            <label class="form-check-label" for="bus">bike</label>
                          </div>
                          <div class="form-check mr-4 mb-5">
                            <input class="form-check-input" type="checkbox" name="transport[]" value="cycle"{{
                                
                             in_array('cycle',unserialize($trip->transport))?"checked":""}}>
                            <label class="form-check-label" for="cycle">cycle</label>
                          </div>
                          @else
                          <input class="form-check-input" type="checkbox" name="transport[]" value="plane" >
                               <label class="form-check-label" for="Plane">Plane</label>
                             </div>
                             <div class="form-check mr-4 mb-5">
                       
                               <input class="form-check-input" type="checkbox" name="transport[]" value="bus" >
                               <label class="form-check-label" for="bus">bus</label>
                             </div>
                             <div class="form-check mr-4 mb-5">
                             <input class="form-check-input" type="checkbox" name="transport[]" value="jeep" >
                             <label class="form-check-label" for="bus">jeep</label>
                           </div>
                              <div class="form-check mr-4 mb-5">
                               <input class="form-check-input" type="checkbox" name="transport[]" value="bike">
                               <label class="form-check-label" for="bus">bike</label>
                             </div>
                             <div class="form-check mr-4 mb-5">
                               <input class="form-check-input" type="checkbox" name="transport[]" value="cycle">
                               <label class="form-check-label" for="cycle">cycle</label>
                             </div>
                          @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Package Price</label>
                        @if ($errors->has('price_low'))
                    
                        <div class="alert alert-warning" role="alert">
                          {{($errors->get('price_low')[0]) }}
                        </div>
                        @endif

                        <input type="text" name="low_price" class="form-control" value="{{isset($trip)? $trip->price_low :""}}">
                    </div>
                    @if ($errors->has('day'))
                    
                    <div class="form-group">
                    <div class="alert alert-warning" role="alert">
                      {{($errors->get('day')[0]) }}
                     
                    </div>  
                    @endif
                    @if ($errors->has('night'))
                    <div class="alert alert-warning" role="alert">
                      {{($errors->get('night')[0]) }}
                     
                    </div>  
                  </div>
                @endif

                    <div class="form-inline ">
                        <label for="price">Time Duration</label>
                        
                        
                    <div class="form-group m-2" >
                      
                        <input type="text" name="day" value="{{isset($trip)? $trip->day :""}}" class="form-control m-2">
                        <label for="price">Day</label>
                        
                    </div>
                    <div class="form-group  m-2">
                        
                        <input type="text" value="{{isset($trip)? $trip->night :""}}" name="night" class="form-control m-2">
                        <label for="price">Night</label>
                    </div>
                </div>
                </div>  
            </div>

            
              
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">Know About Booking</h3>  
                @if ($errors->has('know_before_booking'))
                    
                <div class="alert alert-warning" role="alert">
                     {{($errors->get('know_before_booking')[0]) }} 
                 </div>  
                @endif

                @if (isset($trip))
                <input type="hidden" id="content" name="know_before_booking" value="{{isset($trip)?$trip->know_before_booking : ""}}">
                <trix-editor input="content" placeholder="Product short description"> </trix-editor>
                @else

                @trix(\App\Post::class, 'know_before_booking',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level']])
                @endif
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">Itenary</h3>  
                <h3 class="text-center">Know About Booking</h3>  

                  @if ($errors->has('itinerary'))
                <div class="alert alert-warning" role="alert">
                  {{($errors->get('itinerary')[0]) }}
                  
                </div>  
                @endif
                @if (isset($trip))
                <input type="hidden" id="content" name="itenary" value="{{isset($trip)?$trip->itinerary : ""}}">
                <trix-editor input="content" placeholder="Product short description"> </trix-editor>
                @else

                @trix(\App\Post::class, 'itenary',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
                @endif
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">

                <h3 class="text-center">highlight</h3>  

                <h3 class="text-center">Know About Booking</h3>  
                @if ($errors->has('higlight'))
                <div class="alert alert-warning" role="alert">
                  {{($errors->get('higlight')[0]) }}
                  

                </div>  
                @endif
                
                @if (isset($trip))
                <input type="hidden" id="content" name="highlight" value="{{isset($trip)?$trip->higlight : ""}}">
                <trix-editor input="content" placeholder="Product short description"> </trix-editor>
                @else

                @trix(\App\Post::class, 'highlight',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
                @endif
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">included</h3>  
                <h3 class="text-center">Know About Booking</h3>  
                @if ($errors->has('included'))
                <div class="alert alert-warning" role="alert">
                  {{($errors->get('included')[0]) }}
                  
                </div> 
                @endif

                @if (isset($trip))
                <input type="hidden" id="content" name="included" value="{{isset($trip)?$trip->included : ""}}">
                <trix-editor input="content" placeholder="Product short description"> </trix-editor>
                @else

                @trix(\App\Post::class, 'included',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
                @endif
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">not included</h3>  
                <h3 class="text-center">Know About Booking</h3>  

                @if ($errors->has('not_included'))
                <div class="alert alert-warning" role="alert">
                  {{($errors->get('not_included')[0]) }}
                  
                </div>  
                @endif

                @if (isset($trip))
                <input type="hidden" id="content" name="not_included" value="{{isset($trip)?$trip->not_included : ""}}">
                <trix-editor input="content" placeholder="Product short description"> </trix-editor>
                @else

                @trix(\App\Post::class, 'not_included',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
                @endif
            </div>
        </div>
        <div class="container">
        <button type="submit" class="btn btn-success" style="margin-top:10px">{{isset($trip)?"Update":"Create"}}</button>
      
        </div>
    </form>
    
  
  
@endsection

@section('scripts')
<script>
$(document).ready(function (e) {
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  
   $('#image').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#image_preview_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });
  
   $('#upload_image_form').submit(function(e) {

     e.preventDefault();
  
     var formData = new FormData(this);
  
     $.ajax({
        type:'POST',
        url: "{{ url('photo')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
           this.reset();
           alert('Image has been uploaded successfully');
        },
        error: function(data){
           console.log(data);
         }
       });
   });
});
</script>
@endsection

@section('css')
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css"  media="screen">
@endsection