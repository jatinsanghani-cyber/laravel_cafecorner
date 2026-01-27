<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KOPPEE - Table Reservation</title>
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



<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:350px">
        <h1 class="display-4 text-white text-uppercase">Table Reservation</h1>
        <p class="text-white">Reserve your perfect coffee moment</p>
    </div>
</div>

<div class="container py-5">
    <div class="section-title text-center mb-5">
        <h4 class="text-primary text-uppercase" style="letter-spacing:5px;">Reservation</h4>
        <h1 class="display-4">Book Your Table</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-9">

            <form method="POST" action="/reservation">
    @csrf

    <div class="row">

        <div class="col-md-6 form-group">
            <label>Phone Number</label>
            <input type="tel"
                   name="phone"
                   class="form-control bg-transparent border-primary p-3"
                   placeholder="10 digit number"
                   
                   pattern="[0-9]{10}" required>
        </div>

        <div class="col-md-6 form-group">
            <label for="date">Reservation Date</label>
            <input type="date"
                   id="date"
                   name="date"
                   class="form-control bg-transparent border-primary p-3"
                   min="{{ date('Y-m-d') }}"
                   required>
        </div>

        <div class="col-md-6 form-group">
            <label>Reservation Time</label>
            <input type="time"
                   name="time"
                   class="form-control bg-transparent border-primary p-3"
                   required>
        </div>

        <div class="col-md-6 form-group">
            <label for="guests">Number of Guests</label>
            <select id="guests" 
                    name="guests"
                    class="custom-select border-primary p-3"
                    style="color:#33211D; background-color:transparent;"
                    required>
                <option value="" disabled selected hidden>
                    Select number of guests
                </option>
                <option value="1">1 Guest</option>
                <option value="2">2 Guests</option>
                <option value="3">3 Guests</option>
                <option value="4">4 Guests</option>
                <option value="5">5+ Guests</option>
            </select>
        </div>

        <div class="col-md-6 form-group">
            <label for="seating">Seating Preference</label>
            <select id="seating" 
                    name="seating"
                    class="custom-select bg-transparent border-primary p-3"
                    required>
                <option value="">Choose preference</option>
                <option value="Indoor">Indoor</option>
                <option value="Outdoor">Outdoor</option>
                <option value="No Preference">No Preference</option>
            </select>
        </div>

        <div class="col-md-6 form-group">
            <label for="occasion">Occasion</label>
            <select id="occasion" 
                    name="occasion"
                    class="custom-select bg-transparent border-primary p-3">
                <option value="None">None</option>
                <option value="Birthday">Birthday</option>
                <option value="Anniversary">Anniversary</option>
                <option value="Business">Business Meeting</option>
            </select>
        </div>

        <div class="col-12 form-group">
            <label>Special Requests</label>
            <textarea name="notes"
                      class="form-control bg-transparent border-primary p-3"
                      rows="4"></textarea>
        </div>

        <div class="col-12">
            <button type="submit"
                    class="btn btn-primary btn-block font-weight-bold py-3 mt-3">
                Confirm Reservation
            </button>
        </div>

    </div>
</form>


        </div>
    </div>
</div>

<div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
    <div class="container text-center py-4">
        © KOPPEE Coffee Shop
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

<script>
    // Update label with selected value for Number of Guests
    document.getElementById('guests').addEventListener('change', function() {
        const label = this.parentElement.querySelector('label');
        const selectedText = this.options[this.selectedIndex].text;
        label.textContent = 'Number of Guests: ' + selectedText;
    });

    // Update label with selected value for Seating Preference
    document.getElementById('seating').addEventListener('change', function() {
        const label = this.parentElement.querySelector('label');
        const selectedText = this.options[this.selectedIndex].text;
        label.textContent = 'Seating Preference: ' + selectedText;
    });

    // Update label with selected value for Occasion
    document.getElementById('occasion').addEventListener('change', function() {
        const label = this.parentElement.querySelector('label');
        const selectedText = this.options[this.selectedIndex].text;
        label.textContent = 'Occasion: ' + selectedText;
    });
</script>

</body>
</html>
