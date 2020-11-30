<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container my-4">
        <img src="http://www.horizontravelindia.com/wp-content/uploads/2017/10/Pokhara.jpg" alt="Main Image" class="img-fluid">

        <div class="card p-4 my-4">
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

        <div class="card p-4">
            <div class="div m-0">
                <p class="m-0">
                    <h4 class="d-inline m-0">Price: </h4> from <h5 class="m-0 d-inline font-weight-bold">Rs 8000</h5> to Rs 5000
                </p>
            </div>
            <hr class="m-2">
            <h5>Know Before Booking</h5>
            <ul>
                <li>No-hassle best price guarantee</li>
                <li>Instant Online Booking</li>
                <li>Privicy protected</li>
                <li>Customer care avaiable</li>
                <li>Hand-picked itineraries</li>
            </ul>
            <a href="{{ route('form') }}" class="btn btn-secondary text-uppercase btn-lg">book this trip</a>
        </div>

        <div class="about">
            <h2 class="mb-4">About 5 Nights 6 Days Nepal Tour</h2>
    
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse doloribus enim. Qui nemo quasi, aliquam quaerat itaque voluptatum nostrum minus, accusantium fugit quo officia quas consequuntur ipsum beatae necessitatibus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, placeat nisi expedita numquam sapiente at, facere architecto voluptates aliquam in cum laudantium. Officia, libero labore reiciendis id nam accusantium sapiente.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse doloribus enim. Qui nemo quasi, aliquam quaerat itaque voluptatum nostrum minus, accusantium fugit quo officia quas consequuntur ipsum beatae necessitatibus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, placeat nisi expedita numquam sapiente at, facere architecto voluptates aliquam in cum laudantium. Officia, libero labore reiciendis id nam accusantium sapiente.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Id eos atque sit quasi vel laboriosam quas repudiandae ad, fugiat consectetur nihil, distinctio modi? Explicabo nulla voluptatibus nisi. Exercitationem, soluta odit.
            </p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse doloribus enim. Qui nemo quasi, aliquam quaerat itaque voluptatum nostrum minus, accusantium fugit quo officia quas consequuntur ipsum beatae necessitatibus.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vero, placeat nisi expedita numquam sapiente at, facere architecto voluptates aliquam in cum laudantium. Officia, libero labore reiciendis id nam accusantium sapiente.
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate esse doloribus enim. Qui nemo quasi, aliquam quaerat itaque voluptatum nostrum minus, accusantium fugit quo officia quas consequuntur ipsum beatae necessitatibus.
            </p>
        </div>

        <div class="mb-5 card p-4">
            <h2 class="mb-4">Highlights of 5 Nights 6 Days Nepal Tour</h2>
            <ul>
                <li>Any lunch, dinner, snacks, mineral water etc. unless mentioned in the itinerary.</li>
                <li>Tipping (expected by guides and Driver, but not mandatory)</li>
                <li>Portage, laundry, telephone calls, table drinks or any other expenses of personal nature.</li>
            </ul>
        </div>

        <div class="card">
            <h2 class="px-4 pt-2">What's Included</h2>
            <hr>
            <div class="px-4">
                <ul>
                    <li>All hotel/airport transfer</li>
                    <li>All delux hotel (3 star) accommodation as per the itinery with breakfast</li>
                    <li>Twin sharung accommodation for 1 night's with full board (Breakfast, Lunch & Dinner)</li>
                    <li>All junfle activities in Chitwan</li>
                    <li>Comfortable private vechile/flight as per itineary</li>
                    <li>Professional tour guide on whole day trip in Kathmandu</li>
                    <li>Entrance fee for different sightseeing places</li>
                    <li>All our government taxes, vat, official expenses & service charges</li>
                </ul>
                <h2>What's not Included</h2>
            </div>
            <hr>
            <div class="px-4">
                <ul>
                    <li>Any lunch, dinner, snacks, mineral water etc. unless mentioned in the itinerary.</li>
                    <li>Tipping (expected by guides and Driver, but not mandatory)</li>
                    <li>Portage, laundry, telephone calls, table drinks or any other expenses of personal nature.</li>
                </ul>
            </div>

        </div>
    </div>
</body>
</html>