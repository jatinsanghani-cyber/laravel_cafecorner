<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - About Us</title>
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
                <div class="navbar-nav ml-auto p-4">
                    <a href="/" class="nav-item nav-link">Home</a>
                    <a href="/about" class="nav-item nav-link active">About</a>
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
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">About Us</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="/">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">About Us</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 1950</h1>
            </div>

            <div class="row">

                <!-- Our Story -->
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">To create a warm space where every cup tells a story.</h5>
                    <p>
                        Our journey began with a simple passion for coffee and a dream to create a welcoming place
                        for everyone. What started as a small idea slowly grew into a café where people come together
                        to relax, connect, and enjoy quality coffee.
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem, repudiandae?
                    </p>
                </div>

                <!-- Image -->
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <img class="position-absolute w-100 h-100" src="{{ asset('img/about.png') }}" style="object-fit: cover;">
                </div>

                <!-- Our Vision -->
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quam, modi mollitia eum eligendi minima. Tenetur repudiandae quos quo. Quos, eos eligendi!
                    </p>

                    <h5><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet.</h5>
                    <h5><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet.</h5>
                    <h5><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet.</h5>
                </div>

            </div>

            <!-- Our Mission -->
            <div class="row mt-5">
                <div class="col-lg-12 text-center">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Mission</h4>
                    <h1 class="display-4 mb-4">What Drives Us</h1>
                    <p class="px-lg-5">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quibusdam provident ab quo ducimus laudantium natus aspernatur nihil rerum, nostrum laborum explicabo? Architecto sunt animi quidem blanditiis ullam mollitia nobis!
                    </p>
                </div>
            </div>
            <!-- Our Mission End -->

        </div>
    </div>
    <!-- About End -->


    <!-- Footer Start -->
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

    <script src="{{ asset('js/main.js') }}"></cript>

</body>
</html>
