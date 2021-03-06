<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Efico | Trainings</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark z-depth-0" style="background-color: #3c185b; width: 100%; margin-left: 0; color: white;" >
        <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
        <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1592465124/logo_iyyhfa.png" width="60" height="20" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler but" style="color: white;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse up"  id="navbarSupportedContent" >
        <ul class="navbar-nav ml-auto">
        <div class="navbar-nav" >
            <a class="nav-item nav-link" href="{{ route('index') }}">HOME</a>
            <a class="nav-item nav-link" href="{{ route('about') }}">ABOUT US</a>
            <a class="nav-item nav-link" href="{{ route('contact') }}">CONTACT US</a>
            <a class="nav-item nav-link" href="{{ route('contact') }}">SERVICES</a>
            <a class="nav-item nav-link" href="{{ route('news.index') }}">NEWS <span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="{{ route('faqs') }}">FAQS</a>
            </div>
            </ul>
        </div>
    </nav>

    <div class="container-fluid first py-3">
        <h1 class="text-light p-4 py-5 mb-5 eficoN" >All Trainings</h1>
    </div>


        </header>
        <br/>
        <br/>
        <br/>
        <article>
            <div class="content mx-auto">
                <div class="container">
                    <div class="row justify-content-center">
                        @foreach($trainings as $training)
                            <div class="col-md-6">
                                <div class="card shadow-lg">
                                    <img src="/storage/images/training/cover_images/{{ $training->cover_image }}" style="width: 100%; height: 200px;">
                                    <div class="card-body">
                                        <h2>{{ $training->name }}</h2>
                                        <h4>{{ $training->price }}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
        <br>
<br>
<br/>
<footer>
<div class="container-fluid footer py-5">
    <div class="row ">
        <div class="col">
            <p><Strong>QUICK LINKS</Strong></p>
            <a href="{{ route('about') }}" class="text-light">About Us</a> <br>
            <a href="{{ route('news.index') }}" class="text-light">Newsletter</a>
        </div>
        <div class="col">
        <p><Strong>SERVICES</Strong></p>

        <a href="{{ route('services') }}" class="text-light">Career talks</a> <br>
        <a href="{{ route('services') }}" class="text-light">Internship</a> <br>
        <a href="{{ route('services') }}" class="text-light">Scholarship</a>

    </div>
    <div class="col">
        <p><Strong>FOLLOW US</Strong></p>

        <a href="#" class="text-light"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-light"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-light"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-light"><i class="fab fa-youtube"></i></a>
        <a href="#" class="text-light"><i class="fab fa-linkedin"></i></a>

    </div>
    </div>
</div>
<div class="container-fluid" style=" background-color: #3c185b; text-align: center; color: white; height: 45px; bottom: 0;">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
</div>
</footer>
</body>
<script src="https://kit.fontawesome.com/dc7f1f050e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>


