<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Table Reservation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>

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
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Enter your name">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Enter phone number">
                    </div>

                    <div class="col-md-6 form-group">
                        <label>Email Address</label>
                        <input type="email" class="form-control bg-transparent border-primary p-3" placeholder="Enter email">
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Reservation Date</label>
                        <input type="date" class="form-control bg-transparent border-primary p-3">
                    </div>

                    <div class="col-md-3 form-group">
                        <label>Reservation Time</label>
                        <input type="time" class="form-control bg-transparent border-primary p-3">
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Number of Guests</label>
                        <select class="custom-select bg-transparent border-primary p-3">
                            <option selected>Select guests</option>
                            <option>1 Guest</option>
                            <option>2 Guests</option>
                            <option>3 Guests</option>
                            <option>4 Guests</option>
                            <option>5+ Guests</option>
                        </select>
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Seating Preference</label>
                        <select class="custom-select bg-transparent border-primary p-3">
                            <option selected>Choose preference</option>
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
                        <textarea class="form-control bg-transparent border-primary p-3" rows="4"
                                  placeholder="Any special instructions (window seat, cake, wheelchair access, etc.)"></textarea>
                    </div>

                    <div class="col-12">
                        <button type="button"
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
