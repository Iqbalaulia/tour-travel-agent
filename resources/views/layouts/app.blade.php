<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>

    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="frontend/styles/main.css">
</head>

<body>

    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white">
            <a href="#" class="navbar-brand">
                <img src="frontend/images/logo_nomads.png" alt="Logo Travel" srcset="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon">

                </span>
            </button>


            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Paket Travel</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>
                            <a href="#" class="dropdown-item">Link</a>

                        </div>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Testimonial</a>
                    </li>

                </ul>


                <!-- Mobile button -->
                <form class="form-inline d-sm-block d-md-none">
                    <button class="btn btn-login my-2 my-sm-0">
                        Masuk
                    </button>
                </form>

                <!-- Dekstop button -->
                <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
                        Masuk
                    </button>
                </form>

            </div>


        </nav>
    </div>
    <!-- Navbar -->

    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful World
            <br>
            As Easy One Click
        </h1>

        <p class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>

        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>
    <!-- Header -->

    <!-- Statistik -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        20K
                    </h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        12
                    </h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        3K
                    </h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>
                        72
                    </h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- Statistik -->

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try
                            <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/indonesia.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>

                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/turki.jpg');">
                            <div class="travel-country">TURKI</div>
                            <div class="travel-location">AZERBAIZAN, TURKI</div>

                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/japan.jpg');">
                            <div class="travel-country">JAPAN</div>
                            <div class="travel-location">TOKYO</div>

                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/newzealand.jpg');">
                            <div class="travel-country">NEW ZEALAND</div>
                            <div class="travel-location">NEW ZEALAND</div>

                            <div class="travel-button mt-auto">
                                <a href="details.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/ana.png" alt="" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/visa.png" alt="" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/disney.png" alt="" class="img-partner">
                    </div>
                    <div class="col-md-2 text-center">
                        <img src="frontend/images/shangri-la.png" alt="" class="img-partner">
                    </div>
                    
                </div>
            </div>
        </section>

     <section class="section-testimonial-heading" id="testimonial">
         <div class="row">
             <div class="col text-center">
                 <h2>
                     They Are Loving Us
                 </h2>
                 <p>
                     Moments were giving them 
                     <br>
                     the best experience
                 </p>
             </div>
         </div>
     </section>


     <div class="section section-testimonial-content justify-content-center" id="testimonial-content">
         <div class="container">
             <div class="section-popular-travel row justify-content-center">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/anggaphoto.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Angga Rizky</h3>
                            <p class="testimonial">
                                " It was glorious and i could not stopPropagation();
                                to say wohooo for every single moment Dankeeee"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Ubud
                        </p>
                    </div>
                </div> 

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonials-1.jpeg" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Angga Rizky</h3>
                            <p class="testimonial">
                                " It was glorious and i could not stop
                                to say wohooo for every single moment Dankeeee"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Ubud
                        </p>
                    </div>
                </div> 

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonials-2.jpg" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Angga Rizky</h3>
                            <p class="testimonial">
                                " It was glorious and i could not stopPropagation();
                                to say wohooo for every single moment Dankeeee"
                            </p>
                        </div>
                        <hr>
                        <p class="trip-to mt-2">
                            Trip to Ubud
                        </p>
                    </div>
                </div> 
             </div>
             <div class="row">
                 <div class="col-12 text-center">
                     <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                         I Need Help
                     </a>
                     <a href="" class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                 </div>
             </div>
         </div>
     </div>

    </main>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container pt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-3">
                            <h5>FEATURES</h5>
                            <ul class="list-unstyled">
                                <li><a href="">Reviews</a></li>
                                <li><a href="">Social Media Kit</a></li>
                                <li><a href="">Communities</a></li>
                                <li><a href="">Affiliate</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>ACCOUNT</h5>
                            <ul class="list-unstyled">
                                <li><a href="">Refund</a></li>
                                <li><a href="">Security</a></li>
                                <li><a href="">Rewards</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>COMPANY</h5>
                            <ul class="list-unstyled">
                                <li><a href="">Career</a></li>
                                <li><a href="">Help Center</a></li>
                                <li><a href="">Media</a></li>
                            </ul>
                        </div>

                        <div class="col-12 col-lg-3">
                            <h5>GET CONNECTED</h5>
                            <ul class="list-unstyled">
                                <li><a href="">Jakarta Selatan</a></li>
                                <li><a href="">Indonesia</a></li>
                                <li><a href="">0000-1111-2222</a></li>
                                <li><a href="">support@gmail.com    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2019 Muhammad iqbal aulia rafi
                </div>
            </div>
        </div>
    </footer>


    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>