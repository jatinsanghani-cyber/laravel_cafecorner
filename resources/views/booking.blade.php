<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - My Bookings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/favicon.ico">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
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
                <div class="navbar-nav ml-auto p-4 align-items-lg-center" style="font-size:18px; font-weight:500;">

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

                        <a href="/logout"
                           class="btn mt-2 mt-lg-0"
                           style="background:#FFD27F; color:#2d1c14; font-weight:600;">
                            Logout
                        </a>
                    @endauth

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:350px">
            <h1 class="display-4 text-white text-uppercase">My Bookings</h1>
            <p class="text-white">View and manage your reservations</p>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container py-5">
        <div class="section-title text-center mb-5">
            <h4 class="text-primary text-uppercase" style="letter-spacing:5px;">My Reservations</h4>
            <h1 class="display-4">Table Bookings</h1>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-9">

                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if($reservations->isEmpty())
                    <div class="alert alert-info text-center py-4">
                        <h5>You have no reservations yet.</h5>
                        <p><a href="/reservation" class="btn btn-primary mt-3">Make a Reservation</a></p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead style="background-color:#33211D; color:white;">
                                <tr>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Guests</th>
                                    <th>Seating</th>
                                    <th>Occasion</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($reservations as $r)
                                    <tr>
                                        <td><strong>{{ \Carbon\Carbon::parse($r->date)->format('d-m-Y') }}</strong></td>
                                        <td>{{ \Carbon\Carbon::parse($r->time)->format('H:i') }}</td>
                                        <td><span class="badge badge-primary">{{ $r->guests }}</span></td>
                                        <td>{{ $r->seating }}</td>
                                        <td>{{ $r->occasion ?? '—' }}</td>
                                        <td>{{ substr($r->notes ?? '—', 0, 30) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif

                <div class="text-center mt-5">
                    <a href="/reservation" class="btn btn-primary btn-block font-weight-bold py-3">
                        Make Another Reservation
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="container text-center py-4">
            © KOPPEE Coffee Shop
        </div>
    </div>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

</body>

</html>
