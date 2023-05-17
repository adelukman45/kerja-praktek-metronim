<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 404 Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    @if (session()->has('success'))
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <button class="border-0 bg-white">
                    <a class="navbar-brand text-primary" href="/">
                        <h1 class="display-5">Metronim Studio</h1>
                    </a>
                </button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="container text-center my-auto pt-5">
            <h1 class="mb-3 mt-5 display-3">Congratulation!!!</h1>
            <h1 class="text-primary">{{ session('success') }}</h1>
            <p class="mb-5">please wait, admin will contact you soon</p>
            <a href="/" class="btn btn-primary" type="button">Back Home</a>
        </div>
    @else
        <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                </p>
                <a href="/" class="btn btn-primary">Go Home</a>
            </div>
        </div>
    @endif
