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
    {{-- <link rel="stylesheet" href="{{asset('css/sign.css')}}"> --}}
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

    <section class="welcome_section animate__animate animate__fadeInTopRight">
        <h1 id="welcome_message" class="animate__animate animate__fadeInTopRight"></h1>


    </section>
    <!-- End welcome section -->
      <!-- Start quiz section  -->

      <section class="section_quizzes">
        <div class="container">

          <div class="row">

            <div class="col-lg-2">

            </div>

            <div class="col-lg-8">


             {{-- <div class="card"> --}}

               {{-- <img src="{{asset($singleCategory->image)}}" style="border-radius: 50%; margin-top: 10px" class="card-img-top" alt="..."> --}}
               {{-- <div class="card-body"> --}}
                 {{-- <h5 class="card-title">{{$exam->name}}</h5> --}}
                <form action="{{route('publicresult.index')}}" method="post">
                    @csrf
                 <div style=" ; margin-top:20px">
                <h3 class="mb-5"> Choose the correct answer: </h3>
                </div>
                 @foreach ($singleexam->question as $question)

                 <div class="card mb-3" >
                    <div class="card-header">
                       <h4>{{$question->name}}</h4>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        @foreach ($answers as $option)
                        @if ($option->question_id==$question->id )
                        <input type="radio" id="one" name="{{$question->id}}" >
                  <label for="one"> <p >{{$option->name}}</p></label> <br>
                  @endif
                  @endforeach
                    </blockquote>
                    </div>
                  </div>


                  @endforeach
                  <div >
                       <button type="submit" class="btn btn-primary ; mb-3" style="float: right">Sumbit</button>
                  </div>
                </form>


                  {{-- @foreach ($answers as $answer) --}}
                  {{-- <p>{{$singlequestions->name}}</p> --}}




                  {{-- <div class="px-4 mb-2"><input  type="radio" value="{{$option->name}}" name="user_answer"><span style="margin-left: 1%;">{{$option->name}}</span></div> --}}
                 {{-- <input type="radio" name="answer" id="1">
                 <label for="1">{{$option->name}}</label> --}}
                 <br>

                 {{-- @endforeach --}}




                 {{-- <a href="quiz.html" id="ux" class="start_quiz_btn">Start</a> --}}
               </div>
             </div>
            </div>
            <div class="col-lg-2">

            </div>










          </div>
        </div>
      </section>




     <!-- End quiz section  -->
