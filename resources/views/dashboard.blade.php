
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Hello world</title>

<body>
<section class="header">
	<div class="container">
    {{-- <img src="images/logo.png"> --}}
       <a href="{{route('posts.create')}}" class="logout-btn">CREATE POSTS</a>
       <a href="{{route('booking.index')}}" class="logout-btn">Show My Booking</a>
        {{-- <button class="logout-btn"><a  href="{{route('posts.create')}}">{{__'create_posts')}}</button> --}}
        <button class="logout-btn"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </button>

		</div>
		<h1>Travel Across The nepal</h1>
		<p>Welcome To Nepal </p>
		<div class="input-group">
				<input type="text" class="form-control" placeholder="Search city" name="">
				<div class="input-group-append">
				<button type="submit" class="input-group-text btn">Search</button>
				</div>
		</div>
</section>

 <div class="containerr">
    <div class="heading">
      <h1>Destination Booking</h1>
    </div>
    
    <div class="row">
     
      @foreach ($trips as $trip)
      
      <div class="card">
        <div class="card-header">
         
          {{-- <h1> {{$trip->id}} </h1> --}}
          <h1> {{$trip->title}} </h1>
         
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
          </div>
          <div class="card-body">
          {{-- <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p> --}}
          <a href="{{route('tripdetail.show',$trip->id)}}" class="btn">Book Now</a> 
         
        </div>
        
      </div>
     
      {{-- <div class="card">
        <div class="card-header">
          <h1> {{$trip->id}} </h1>
          <h1> {{$trip->title}} </h1>
         
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
                 </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
        </div>
      </div> --}}
      {{-- <div class="card">
        <div class="card-header">
          <img src="https://www.eyesonnepal.com/wp-content/uploads/2015/03/Tibet-Nepal-Tours.jpg">
        </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
        </div>
      </div> --}}
      {{-- <div class="card">
        <div class="card-header">
          <img src="https://www.nepaltours.com/wp-content/uploads/2019/01/1522848_458752154225670_762148131_o.jpg">
        </div>
        <div class="card-body">
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi neque molestiae eius explicabo mollitia tempore reiciendis, vel, sequi.
          </p>
          <a href="{{route('detail')}}" class="btn">Book Now</a>
        </div>
      </div>
     --}}
      @endforeach  
    </div>
    
  </div>
  
  <div class="heading"> 
    <h2>Most visited Places</h2>
  
  </div>
  <div class="image-container">
    @foreach ($trips as $trip)
      <div class="image">
       
        {{-- <a href="#"><img src="https://www.nepaltours.com/wp-content/uploads/2019/01/1522848_458752154225670_762148131_o.jpg">
        </a> --}}
        {{-- @foreach ($trips as $trip) --}}

         <h1> {{$trip->title}} </h1>
          <h3>NRP:{{$trip->price_low}} </h3>
          <img src="{{asset('storage/'.$trip->image)}}" alt="Main Image" class="img-fluid " height="100px" width="100px">
        {{-- @endforeach --}}
        
      </div>
      <a href="{{route('tripdetail.show',$trip->id)}}" class="btn btn-info ">Detail</a>

      @endforeach
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.adventurewhitehimalaya.com/wp-content/uploads/2020/05/lumbini.jpg">
      </div> --}}
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.eyesonnepal.com/wp-content/uploads/2015/03/Tibet-Nepal-Tours.jpg">
      </div>
      <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://cdn.traveltalktours.com/wp-content/uploads/2017/01/Essential-Nepal-thumb-360x225.jpg">
      </div> --}}
      {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://tigerencounter.com/wp-content/uploads/2019/11/Chitwan-NP.jpg">
      </div>
     <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://www.nepaltours.com/wp-content/uploads/2019/01/1522848_458752154225670_762148131_o.jpg">
      </div>     
      <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://glaciernepaltreks.com/images/trip/annapurna-base-camp-trek-1582610267.jpg">
      </div> --}}
     {{-- <div class="image">
        <h1> place name</h1>
        <a href="#"><img src="https://enlightentrip.com/images/package/C15663129550.jpeg">
      </div>   --}}
      
    </div>
  
  
  
  
      <footer class="footer-distributed">
  
        <div class="footer-left">
            <img src="img/logo.png">
          <h3>About<span>Hello-nepal</span></h3>
  
          <p class="footer-links">
            <a href="{{route('dashboard')}}">Home</a>
            |
            <a href="#">Blog</a>
            |
            <a href="#">About</a>
            |
            <a href="#">Contact</a>
          </p>
  
          <p class="footer-company-name">© 2020 Yamraj Group Pvt. Ltd.</p>
        </div>
  
        <div class="footer-center">
          <div>
            <i class="fa fa-map-marker"></i>
              <p><span>309 - kamalpokhari</span>
              Kathmandu, Nepal - 9806090230</p>
          </div>
  
          <div>
            <i class="fa fa-phone"></i>
            <p>+977-6969696969</p>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <p><a href="mailto:yamraj@gmail.com">yamraj@gmail.com</a></p>
          </div>
        </div>
        <div class="footer-right">
          <p class="footer-company-about">
            <span>About the company</span>
            very very good company</p>
          <div class="footer-icons">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </footer>
</body>
</html>
