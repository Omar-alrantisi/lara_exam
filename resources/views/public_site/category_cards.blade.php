@extends('public_site.layouts.master')
@section('content')
<link rel="stylesheet" href="css/welcome.css">
 <!-- Start welcome section -->

 <section class="welcome_section animate__animate animate__fadeInTopRight">
    <h1 id="welcome_message" class="animate__animate animate__fadeInTopRight"></h1>

    <h3>What Kind of Exams You Need?</h3>
</section>
<!-- End welcome section -->
  <!-- Start quiz section  -->

  <section class="section_quizzes">
    <div class="container">
      <div class="row">
        @foreach ($categories as $category)
        <div class="col-lg-4">
         <div class="card" style="width: 18rem;">
           <img src="{{asset($category->image)}}" style="border-radius: 50%; margin-top: 10px" class="card-img-top" alt="...">
           <div class="card-body">
             <h5 class="card-title">{{$category->name}}</h5>
             <p class="card-text" style="margin-top:10px; margin-bottom:50px;" >
                 Browse The Exams

                


             </p>
             <a href="{{ route('single_category',$category->id )}}" id="ux" style="margin-top:100px;" class="start_quiz_btn">Browse</a>
           </div>
         </div>
        </div>
        @endforeach









      </div>
    </div>
  </section>
  @endsection
 <!-- End quiz section  -->
