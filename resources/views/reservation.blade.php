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
        <!-- Navbar -->
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
                    <a href="/about" class="nav-item nav-link">About</a>
                    <a href="/service" class="nav-item nav-link ">Service</a>
                    <a href="/menu" class="nav-item nav-link">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="/reservation" class="dropdown-item active">Reservation</a>
                            <a href="/testimonial" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>

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

            <form>

                <div class="row">

                    <div class="col-md-6 form-group">
                        <label>Full Name</label>
                        <input type="text"
                               class="form-control bg-transparent border-primary p-3"
                               placeholder="Enter your name"
                               required
                               pattern="[A-Za-z ]{3,}"
                               title="Only letters, minimum 3 characters">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Phone Number</label>
                        <input type="tel"
                               class="form-control bg-transparent border-primary p-3"
                               placeholder="10 digit number"
                               required
                               pattern="[0-9]{10}"
                               title="Enter 10 digit phone number">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Email Address</label>
                        <input type="email"
                               class="form-control bg-transparent border-primary p-3"
                               placeholder="Enter email"
                               required>
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Reservation Date</label>
                        <input type="date"
                               class="form-control bg-transparent border-primary p-3"
                               required
                               min="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Reservation Time</label>
                        <input type="time"
                               class="form-control bg-transparent border-primary p-3"
                               required>
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Number of Guests</label>
                        <select class="custom-select bg-transparent border-primary p-3"
                                required>
                            <option value="">Select guests</option>
                            <option>1 Guest</option>
                            <option>2 Guests</option>
                            <option>3 Guests</option>
                            <option>4 Guests</option>
                            <option>5+ Guests</option>
                        </select>
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Seating Preference</label>
                        <select class="custom-select bg-transparent border-primary p-3"
                                required>
                            <option value="">Choose preference</option>
                            <option>Indoor</option>
                            <option>Outdoor</option>
                            <option>No Preference</option>
                        </select>
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Occasion (Optional)</label>
                        <select class="custom-select bg-transparent border-primary p-3">
                            <option selected>None</option>
                            <option>Birthday</option>
                            <option>Anniversary</option>
                            <option>Business Meeting</option>
                        </select>
                    </div>

                    <div class="col-12 form-group">
                        <label>Special Requests</label>
                        <textarea class="form-control bg-transparent border-primary p-3"
                                  rows="4"
                                  placeholder="Any special instructions"></textarea>
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

</body>
</html>
