<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container card mt-2 p-3">
    <h1>Booking Form</h1>
    <form action="submit" method="POST">
        @csrf
        <div class="form-group">
            <label for="Full_name">Full Name</label>
            <input class="form-control" placeholder="Full_name" type="text" name="Full_name" id="Full_name">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="gmail">Gmail</label>
                <input class="form-control" placeholder="E-mail" type="email" name="gmail" id="gmail">
            </div>
            {{-- <div class="form-group col-md-6">
                <label for="provience">Provience</label>
                <select name="provience" id="provience" class="form-control">
                    <option selected>--- Select your Provience ---</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </div> --}}
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Trip Date</label>
                <input class="form-control" type="text" name="trip_date" id="trip_date">
            </div>
            {{-- <div class="form-group col-md-6">
                <label for="noofpeople">Number of People</label>
                <select name="noofpeople" id="noofpeople" class="form-control">
                    <option selected>--- No of People ---</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div> --}}
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input class="form-control" placeholder="phone_number" type="phone_number" name="phone_number" id="phone_number">
        </div>
        {{-- <div class="form-group">
            <label for="pickup">Pickup Details</label>
            <textarea class="form-control" id="pickup" rows="3" placeholder="Pickup Details"></textarea>
            <!-- <input class="form-control" placeholder="Pickup Details" type="text" name="pickup" id="pickup"> -->
        </div> --}}
        <div class="form-group">
            <label for="extra">Extra Requirements</label>
            <textarea class="form-control" id="extra" type="extra" name="extra" placeholder="extra"></textarea>
             {{-- <input class="form-control" placeholder="Extra Requirements" type="text" name="extra" id="extra"> --}}
        </div>
        {{-- <input  type="submit" value="Confirm Booking" class="btn btn-primary"> --}}
        <button type="submit">Submit</button>
    </form>
</div>
</body>

</html>