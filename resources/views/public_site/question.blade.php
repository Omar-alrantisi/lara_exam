
<link rel="stylesheet" href="/css/welcome.css">
 <link rel="stylesheet" href="/css/quiz.css">
 {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
 <!-- Start welcome section -->

 <section class="welcome_section animate__animate animate__fadeInTopRight">
    <h1 id="welcome_message" class="animate__animate animate__fadeInTopRight"></h1>

    <h3>What Kind of Job You Need?</h3>
</section>
<!-- End welcome section -->
  <!-- Start quiz section  -->

  <section class="section_quizzes">
    <div class="container">

      <div class="row">

        <div class="col-lg-2">

        </div>

        <div class="col-lg-8">
            @foreach ($singleexam->question as $question)
         {{-- <div class="card" style="margin-top: 200px"> --}}

           {{-- <img src="{{asset($singleCategory->image)}}" style="border-radius: 50%; margin-top: 10px" class="card-img-top" alt="..."> --}}
           <div class="card-body">
             {{-- <h5 class="card-title">{{$exam->name}}</h5> --}}
             <p class="card-text" style="margin-top:10px; margin-bottom:50px;">
                 Start!
             </p>


             <h3> {{$question->name}} </h3>




             @foreach ($answers as $option)
              @if ($option->question_id==$question->id )
              {{-- @foreach ($answers as $answer) --}}
              {{-- <p>{{$singlequestions->name}}</p> --}}
              <input type="radio" id="one" name="answer1" >
              <label for="one"> <h5 style="font-weight: bold;" >{{$option->name }}</h5></label> <br>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Default radio
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Default checked radio
                </label>
              </div>

              {{-- <div class="px-4 mb-2"><input  type="radio" value="{{$option->name}}" name="user_answer"><span style="margin-left: 1%;">{{$option->name}}</span></div> --}}
             {{-- <input type="radio" name="answer" id="1">
             <label for="1">{{$option->name}}</label> --}}
             <br>

             {{-- @endforeach --}}


             @endif
             @endforeach
             @endforeach
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
