<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>


<!-- Navbar Start -->
<div class="container-fluid p-0 nav-bar">
    <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
        <a href="/" class="navbar-brand px-lg-4 m-0">
            <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto p-4 align-items-lg-center"
                 style="font-size:18px; font-weight:500;">

                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="/service" class="nav-item nav-link">Service</a>
                <a href="/menu" class="nav-item nav-link">Menu</a>

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu text-capitalize">
                        <a href="/reservation" class="dropdown-item">Reservation</a>
                        <a href="/testimonial" class="dropdown-item">Testimonial</a>
                    </div>
                </div>

                <a href="/contact" class="nav-item nav-link">Contact</a>

                {{-- AUTH PART --}}
                @guest
                    <a href="/login"
                       class="btn ml-lg-4 mt-2 mt-lg-0"
                       style="background:#FFD27F; color:#2d1c14; font-weight:600;">
                        Login
                    </a>

                    <a href="/register"
                       class="btn ml-lg-2 mt-2 mt-lg-0"
                       style="background:#DA9F5B; color:white; font-weight:600;">
                        Sign Up
                    </a>
                @endguest

                @auth
                    <span class="text-white ml-lg-4 mr-3">
                        Hi, {{ auth()->user()->name }}
                    </span>

                    <a href="/my-bookings"
                       class="btn ml-lg-2 mt-2 mt-lg-0"
                       style="background:#DA9F5B; color:white; font-weight:600;">
                        My Bookings
                    </a>

                    <form method="POST" action="/logout" class="d-inline ml-lg-2 mt-2 mt-lg-0">
                        @csrf
                        <button type="submit"
                                class="btn"
                                style="background:#FFD27F; color:#2d1c14; font-weight:600;">
                            Logout
                        </button>
                    </form>
                @endauth

            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->



    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-white font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-white font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <i class="fa fa-angle-left text-white"></i>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <i class="fa fa-angle-right text-white"></i>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 1950</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">To create a warm space where every cup tells a story.</h5>
                    <p>Our journey began with a simple idea to create a place where people could enjoy great cof...</p>
                    <a href="/about" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0">
                    <img class="w-100" src="{{ asset('img/about.png') }}" style="object-fit: cover;">
                </div>
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>Our vision is to become a place where...</p>
                    <h5><i class="fa fa-check text-primary mr-3"></i>Serve quality coffee with passion</h5>
                    <h5><i class="fa fa-check text-primary mr-3"></i>Create a welcoming atmosphere</h5>
                    <h5><i class="fa fa-check text-primary mr-3"></i>Build strong community connections</h5>
                    <a href="/about" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Beans</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-5">
                    <img class="img-fluid mb-4" src="{{ asset('img/service-1.jpg') }}" alt="">
                    <h4 class="mb-3">Best Coffee Flavors</h4>
                    <p>We offer a wide variety of coffee fla...</p>
                    <a href="/service" class="btn btn-primary font-weight-bold px-4 py-2">Learn More</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <img class="img-fluid mb-4" src="{{ asset('img/service-2.jpg') }}" alt="">
                    <h4 class="mb-3">Fresh Coffee Beans</h4>
                    <p>Our coffee beans are sourced from tru...</p>
                    <a href="/service" class="btn btn-primary font-weight-bold px-4 py-2">Learn More</a>
                </div>
                <div class="col-lg-4 mb-5">
                    <img class="img-fluid mb-4" src="{{ asset('img/service-3.jpg') }}" alt="">
                    <h4 class="mb-3">Fast Delivery</h4>
                    <p>Enjoy your coffee in a calm a...</p>
                    <a href="/service" class="btn btn-primary font-weight-bold px-4 py-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Menu Preview Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('img/1.jpg') }}" class="rounded-circle" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h4>Cappuccino</h4>
                            <p class="m-0">Rich espresso topped with steamed milk foam</p>
                            <h5 class="m-0">Rs.149.00</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    <div class="d-flex mb-4">
                        <img src="{{ asset('img/3.jpg') }}" class="rounded-circle" style="width: 80px; height: 80px;">
                        <div class="pl-3">
                            <h4>Iced Coffee</h4>
                            <p class="m-0">Chilled brewed coffee served over ice</p>
                            <h5 class="m-0">Rs.159.00</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="/menu" class="btn btn-primary font-weight-bold px-4 py-2">View Full Menu</a>
            </div>
        </div>
    </div>
    <!-- Menu Preview End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Customers Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <img class="img-fluid mb-4" src="{{ asset('img/testimonial-1.jpg') }}">
                    <p class="fs-5">"Amazing coffee!"</p>
                    <h4>Martha</h4>
                </div>
                <div class="testimonial-item">
                    <img class="img-fluid mb-4" src="{{ asset('img/testimonial-2.jpg') }}">
                    <p class="fs-5">"Had a very good ambient!"</p>
                    <h4>Mikkel</h4>
                </div>
                <div class="testimonial-item">
                    <img class="img-fluid mb-4" src="{{ asset('img/testimonial-3.jpg') }}">
                    <p class="fs-5">"Good service!"</p>
                    <h4>Hannes</h4>
                </div>
                <div class="testimonial-item">
                    <img class="img-fluid mb-4" src="{{ asset('img/testimonial-4.jpg') }}">
                    <p class="fs-5">"Best experience!"</p>
                    <h4>Jonas</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<!-- Golden Divider Start -->
<div class="container-fluid py-4 text-center" style="background:#fffcf4;">
    <div style="
        width: 1.6px;
        height:120px;
        background-color:#DA9F5B;;
        margin:auto;">
    </div>
</div>
<!-- Golden Divider End -->




  <!-- Reservation Call To Action -->
<div class="container-fluid py-5">
    <div class="container text-center">
        <h1 class="mb-4" style="color: #33211D; font-weight:900; letter-spacing:2px;">
            Book A Table Now
        </h1>
        <a href="/reservation" class="btn font-weight-bold py-3 px-5" 
           style="background:#FFD27F; color:#2d1c14; border:none; font-size:20px;">
           Book Now
        </a>
    </div>
</div>
<!-- End -->
<!-- Golden Divider Start -->
<div class="container-fluid py-4 text-center" style="background:#fffcf4;">
    <div style="
        width: 1.6px;
        height:120px;
        background-color:#DA9F5B;;
        margin:auto;">
    </div>
</div>
<!-- Golden Divider End -->

<!-- Map Start -->
<div class="container-fluid py-5" 
     >
    <div class="container text-center">
        <h2 style="color:#33211D; font-weight:900;">Visit Us</h2>
        <p class="mb-4" style="font-size:18px;">Marwadi University, Rajkot</p>

        <iframe class="w-100 shadow-lg" height="350" frameborder="0" 
            style="border:4px solid #FFD27F; border-radius:10px;"
            src="https://www.google.com/maps?q=marwadi%20university%20rajkot&t=&z=13&ie=UTF8&iwloc=&output=embed"
            allowfullscreen>
        </iframe>
    </div>
</div>
<!-- Map End -->

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="container py-5">
            <p class="text-center mb-0">© KOPPEE Coffee Shop</p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('mail/contact.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
