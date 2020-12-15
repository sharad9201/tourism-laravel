@extends('layouts.app')

@section('content')
<div class="container card mt-2 p-3">
    <div class="row my-4">
    <div class="col-lg-6">
    <img src="http://www.horizontravelindia.com/wp-content/uploads/2017/10/Pokhara.jpg" alt="Main Image" class="img-fluid">
    </div>
    
    <div class="col-lg-6">
        <div class="p-4 my-4">
            <h2>Trip Facts</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Destination: <span class="font-weight-bold">Nepal</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Trip Difficulty: <span class="font-weight-bold">Easy</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Trip Style: <span class="font-weight-bold">Tour</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Transport: <span class="font-weight-bold">Private Vechile / Aeroplane</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Food: <span class="font-weight-bold">Breakfast, Lunch & Dinner (BLD)</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Accommodation: <span class="font-weight-bold">Hotel / Guest House / Lodge</span></p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <p class="m-1">Group Size: <span class="font-weight-bold">2-25</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
    <h1>Booking Form</h1>
    <form action="submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="Full_name">Full Name</label>
            <input class="form-control" placeholder="Full_name" type="text" name="Full_name" id="Full_name">
        </div>
        <div class="form-group">
            <label for="gmail">Gmail</label>
            <input class="form-control" placeholder="E-mail" type="email" name="gmail" id="gmail">
        </div>
        <div class="form-group">
            <label for="date">Trip Date</label>
            <input class="form-control" type="date" name="trip_date" id="trip_date">
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" placeholder="phone_number" type="phone_number" name="phone_number" id="phone_number">
        </div>
        <div class="form-group">
            <label for="extra">Extra Requirements</label>
            <textarea class="form-control" id="extra" type="extra" name="extra" placeholder="extra"></textarea>
            {{-- <input class="form-control" placeholder="Extra Requirements" type="text" name="extra" id="extra"> --}}
        </div>
        <input  type="submit" value="Confirm Booking" class="btn btn-primary">
    </form>
</div>
@endsection