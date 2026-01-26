<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>KOPPEE - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
</head>

<body>


<div class="container-fluid page-header mb-3 position-relative overlay-bottom">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height:260px">
        <h1 class="display-4 text-white text-uppercase">Login</h1>
    </div>
</div>


<div class="container pt-3 pb-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="bg-light p-5 rounded">
                <h2 class="text-center mb-4">Welcome Back</h2>

                <form method="POST" action="/login">
                    @csrf

                    <div class="form-group mb-3">
                        <input type="email" name="email" class="form-control p-4" placeholder="Email Address"required>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" name="password" class="form-control p-4" placeholder="Password"required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block py-3">
                        Login
                    </button>

                    <p class="text-center mt-4">
                        Don’t have an account?
                        <a href="/register">Register</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
