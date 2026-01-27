<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KOPPEE | Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <style>
        /* Admin Dashboard Footer Fix */
html, body {
    height: 100%;
}

.admin-wrapper {
    min-height: 100vh;
    display: flex;
    flex-direction: column;
}

.admin-content {
    flex: 1;
}

    </style>
</head>

<body>

<div class="admin-wrapper">

    <!-- NAVBAR -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="/" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">KOPPEE</h1>
            </a>

            <div class="ml-auto d-flex align-items-center pr-4">
                <span class="text-white mr-3">
                    Admin: {{ auth()->user()->name }}
                </span>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                            class="btn"
                            style="background:#FFD27F; color:#2d1c14; font-weight:600;">
                        Logout
                    </button>
                </form>
            </div>
        </nav>
    </div>

    <!-- HEADER -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:250px">
            <h1 class="display-4 text-white text-uppercase">Admin Dashboard</h1>
            <p class="text-white">All Reservations</p>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="container admin-content mb-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>#</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Guests</th>
                        <th>Seating</th>
                        <th>Occasion</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($reservations as $res)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $res->user->name ?? 'N/A' }}</td>
                            <td>{{ $res->user->email ?? 'N/A' }}</td>
                            <td>{{ $res->phone }}</td>
                            <td>{{ $res->date }}</td>
                            <td>{{ $res->time }}</td>
                            <td>{{ $res->guests }}</td>
                            <td>{{ $res->seating }}</td>
                            <td>{{ $res->occasion ?? '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">No reservations found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- FOOTER (NOW STICKS TO BOTTOM) -->
       <!-- Footer -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="container py-5">
            <p class="text-center mb-0">© KOPPEE Coffee Shop</p>
        </div>
    </div>
    <!-- Footer End -->

</div>

</body>
</html>
