@extends('layouts.app')

@section('dash')
    <h3>dashboard</h3>
@endsection

@section('form')
    <h2 class="text-center">Detail form</h2>
   
<form action="{{route('tripdetail.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
       
    <div class="form-group">
                
        <label for="title">title</label>
        <input type="text" class="form-control" name="title" placeholder="title">
      </div>
            <div class="form-group">

                <label for="Destination">Destination</label>
                <input type="text" class="form-control" name="destination" placeholder="destiantion">
              </div>
              <div class="form-group">
                <label for="difficulty">Difficulty</label>
                <select class="form-control" name="difficulty">
                    <option selected>Choose...</option>
                    <option>easy</option>
                    <option>Medium</option>
                    <option>Difficult</option>
                  </select>
                  <div class="form-group">
                    <label for="style">style</label>
                    <select class="form-control" name="style">
                        <option selected>Choose...</option>
                        <option>trip</option>
                        <option>trek</option>
                        <option>adventure</option>
                      </select>
                     
                      <div class="col-md-7 mb-2">
                        <img id="image_preview_container" src="{{ asset('storage/image/image-preview.png') }}"
                            alt="preview image" style="max-height: 150px;">
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <input type="file" name="image" placeholder="Choose image" id="image">
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        </div>
                    </div>
                   <div class="form-group">
                    <label for="form-check">Transport</label>
                    <div class="form-inline ">
                        <div class="form-check mr-4 mb-5">
                            <input class="form-check-input" type="checkbox" name="transport[]" value="Aeroplane">
                            <label class="form-check-label" for="Plane">Plane</label>
                          </div>
                          <div class="form-check mr-4 mb-5">
                    
                            <input class="form-check-input" type="checkbox" name="transport[]" value="bus">
                            <label class="form-check-label" for="bus">bus</label>
                          </div>
                          <div class="form-check mr-4 mb-5">
                          <input class="form-check-input" type="checkbox" name="transport[]" value="jeep">
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
                    </div>
                    <div class="form-group">
                        <label for="price">Package Price</label>
                        <input type="text" name="low_price" class="form-control">
                    </div>
                    <div class="form-inline ">
                        <label for="price">Time Duration</label>
                    <div class="form-group m-2" >
                      
                        <input type="text" name="day" class="form-control m-2">
                        <label for="price">Day</label>
                    </div>
                    <div class="form-group  m-2">
                        
                        <input type="text" name="night" class="form-control m-2">
                        <label for="price">Night</label>
                    </div>
                </div>
                </div>  
            </div>

            
              
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">Know About Booking</h3>  
                @trix(\App\Post::class, 'know_before_booking',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level']])
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">Itenary</h3>  
                @trix(\App\Post::class, 'itenary',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">highlight</h3>  
                @trix(\App\Post::class, 'highlight',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">included</h3>  
                @trix(\App\Post::class, 'included',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
            </div>
        </div>
        <div class="container">
            <div class="card p-4 my-4">
                <h3 class="text-center">not included</h3>  
                @trix(\App\Post::class, 'not_included',[ 'hideTools' => [ 'file-tools'],'hideButtonIcons'=>['decrease-nesting-level', 'increase-nesting-level'] ])
            </div>
        </div>
        <div class="container">
            <button type="submit" class="btn btn-primary">Create</button>
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