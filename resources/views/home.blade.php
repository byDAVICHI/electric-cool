@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electric Cool Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General card styles */
        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Carousel styles */
        .carousel-inner img {
            border-radius: 1rem;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 0.5rem;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(100%);
        }

        /* Text styles */
        .card-header h5 {
            font-weight: bold;
            color: #333;
        }

        .card-body h5 {
            color: #555;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header text-center"><h5><span class="fa fa-home"></span> @yield('title')</h5></div>
                <div class="card-body">
                    <h5>Hi <strong>{{ Auth::user()->name }},</strong> {{ __('You are logged in to ') }}{{ config('ELECTRIC-COOL', 'ELECTRIC-COOL') }}</h5>
                    <hr>
                    <!-- Additional content can go here -->
                </div>
            </div>
            <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/5.png" class="d-block w-100" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Valor</h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/12.png" class="d-block w-100" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lealtad</h5>
                            <p></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/8.png" class="d-block w-100" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Humildad</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
</div>



<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
