@extends('layouts.app')

@section('content')
    <main id="main">
        <div class="hero-section d-flex" style="background-image: url('sourceimages/traveller nepal.jpg'); ">
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
        </div>

        <div class="our-services d-flex mt-15">
            <div class="container">
                <div class="d-flex justify-content-center mb-0_8">
                    <h2>Our Services</h2>
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
                                    <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                        totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="#" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-wrap" style="background-image: url('sourceimages/traveller1.jpg');">
                                </div>
                                <div class="card-body mt-0_6">
                                    <h4 class="card-title">Adventure</h4>
                                    <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                        totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="#" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 3 -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="img-wrap" style="background-image: url('sourceimages/traveller1.jpg');">
                                </div>
                                <div class="card-body mt-0_6">
                                    <h4 class="card-title">Adventure</h4>
                                    <p class="card-text mb-0_4">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit.
                                        Voluptatem laboriosam veniam vel distinctio nesciunt saepe aperiam dolorem,
                                        totam sapiente magni, illo reiciendis corrupti, aliquid tempora blanditiis quia
                                        cum eligendi illum!</p>
                                    <a href="#" class="card-link text-uppercase style">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="question mt-30">
            <div class="row two-column">
                <div class="col-sm-12 col-md-6 img-wrap"
                    style="background-image: url('sourceimages/mustang nepal.jpg');"></div>
                <div class="colsm-12 col-md-6">
                    <div class="text-wrap p-45">
                        <h2 class="my-30">Why Nepal?</h2>
                        <p class="my-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam
                            minima
                            praesentium
                            sapiente? Aliquid sit deserunt deleniti quaerat, eaque, doloribus magnam dolores,
                            voluptatibus
                            tenetur dolorum optio eligendi unde enim accusamus?</p>
                        <p class="my-15">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis laboriosam
                            minima
                            praesentium
                            sapiente? Aliquid sit deserunt deleniti quaerat, eaque, doloribus magnam dolores,
                            voluptatibus
                            tenetur dolorum optio eligendi unde enim accusamus?</p>
                        <button class="btn btn-primary rounded-0 btn-lg my-15">Visit Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="review mt-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-1">previous</div>
                    <div class="col-3"><img class="ml-15 rounded-circle review-img" src="sourceimages/traveller1.jpg"
                            alt="Generic placeholder image"></div>
                    <div class="col-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia magni
                        iste,
                        dicta necessitatibus, ex molestiae eligendi minus fugit ducimus voluptate et laudantium?
                        Voluptas ea qui officia debitis deleniti sint aspernatur.</div>
                    <div class="col-1">next</div>
                </div>
            </div>
        </div>

        <div class="subscribe d-flex align-items-center bg-primary my-30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-8">
                        <form method="POST">
                            <div class="input-group mb-3">
                                <input type="email" class="py-0_6 px-15 bg-green color-white form-control"
                                    placeholder="Email Address">
                            </div>
                        </form>
                    </div>
                    <div class="col-4">
                        <button class="btn subscribe-btn btn-lg text-uppercase">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection