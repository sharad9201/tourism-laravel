
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Page</title>
    <!-- links for css, bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- links for javascript, jquery  -->
    <script>window.jQuery || document.write('<script src="js/jquery-3.3.1.min.js" defer><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" crossorigin="anonymous"
        defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"
        defer></script>
    <script src="js/jquery.main.js" defer></script>

</head>

<body>
    <header id="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light d-flex align-items-end">
                <a class="navbar-brand logo" href="#">Sailour</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-items-end" id=" navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active px-10 mb-sm-0_5">
                            <a class="nav-link py-0" href="#">About</a>
                        </li>
                        <li class="nav-item px-10 mb-sm-0_5">
                            <a class="nav-link py-0" href="#">Features</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav w-100 d-flex justify-content-end">
                        <li class="nav-item px-0_4 mb-sm-0_5">
                            <a class="nav-link btn-outline-primary" href="{{route('login')}}">Sign In</a>
                        </li>
                        <li class="nav-item px-0_4">
                            <a class="nav-link btn-outline-primary" href="{{ route('register') }}">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

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

    <footer id=" footer">
        <div class="top-footer"></div>
        <div class="base-footer"></div>
    </footer>
</body>

</html>