<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <!-- main css -->

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- sign css -->
    <link rel="stylesheet" href="{{asset('css/sign.css')}}">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap-5.0.2-dist/css/bootstrap.css')}}">
    <!-- fount awsome -->
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css')}}"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- animate -->
    <link rel="stylesheet" href="{{asset('https://unpkg.com/aos@next/dist/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#services">About Us</a>
             </li>
             <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="#contact">Contact Us</a>
             </li>
              <li class="nav-item">
                <a class="myButton register"   href="#">Register</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    <!-- End Navbar -->
