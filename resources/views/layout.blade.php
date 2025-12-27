<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR START -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg navbar-dark py-3">
            <a href="/" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="/" class="nav-item nav-link @yield('home_active')">Home</a>
                    <a href="/about" class="nav-item nav-link @yield('about_active')">About</a>
                    <a href="/service" class="nav-item nav-link @yield('service_active')">Service</a>
                    <a href="/menu" class="nav-item nav-link @yield('menu_active')">Menu</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu">
                            <a href="/reservation" class="dropdown-item @yield('reservation_active')">Reservation</a>
                            <a href="/testimonial" class="dropdown-item @yield('testimonial_active')">Testimonial</a>
                        </div>
                    </div>

                    <a href="/contact" class="nav-item nav-link @yield('contact_active')">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- NAVBAR END -->


    <!-- MAIN PAGE CONTENT -->
    @yield('content')
    <!-- MAIN PAGE CONTENT END -->


    <!-- FOOTER START -->
    <div class="container-fluid footer text-white pt-5 px-0">
        <div class="container text-center">
            <p class="mb-0">© KOPPEE Coffee Shop</p>
        </div>
    </div>
    <!-- FOOTER END -->


    <!-- JS FILES -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
