<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Our Menu</title>
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




    <!-- Page Header -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>

            <div class="row">

                <!-- HOT COFFEE -->
                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/1.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cappuccino</h4>
                            <p class="m-0">Rich espresso topped with steamed milk foam</p>
                            <h5 class="m-0">Rs.149.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/2.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Mocha</h4>
                            <p class="m-0">Espresso blended with chocolate and milk</p>
                            <h5 class="m-0">Rs.259.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/5.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Latte</h4>
                            <p class="m-0">Smooth espresso with steamed milk</p>
                            <h5 class="m-0">Rs.169.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/6.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Americano</h4>
                            <p class="m-0">Bold espresso diluted with hot water</p>
                            <h5 class="m-0">Rs.189.00</h5>
                        </div>
                    </div>
                </div>

                <!-- COLD COFFEE -->
                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/3.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Iced Coffee</h4>
                            <p class="m-0">Chilled brewed coffee served over ice</p>
                            <h5 class="m-0">Rs.159.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/4.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Cold Brew</h4>
                            <p class="m-0">Slow-brewed coffee with smooth taste</p>
                            <h5 class="m-0">Rs.179.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/7.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Frappé</h4>
                            <p class="m-0">Blended iced coffee with creamy texture</p>
                            <h5 class="m-0">Rs.219.00</h5>
                        </div>
                    </div>

                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle" src="{{ asset('img/8.jpg') }}">
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4>Iced Latte</h4>
                            <p class="m-0">Espresso mixed with cold milk and ice</p>
                            <h5 class="m-0">Rs.149.00</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Footer -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="container py-5">
            <p class="text-center mb-0">© KOPPEE Coffee Shop</p>
        </div>
    </div>
    <!-- Footer End -->


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
        <i class="fa fa-angle-double-up"></i>
    </a>


    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
