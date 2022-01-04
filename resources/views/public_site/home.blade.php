@extends('dashboard.layouts.master')
@section('content')
<!-- Start Landing -->
<section class="landing_section" id="home">
    <div class="landing_section_content ">
        <div class="continer">
            <div class="row">
                <div class="col-lg-6">
                    <div class="landing_section_content_part1" data-aos="fade-up-right">
                        <h1>Online <span class="landing_span">Exam</span>  </h1>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                           Quod ullam in natus quaerat aspernatur! Reiciendis quam
                           optio officiis quidem ea aut sunt suscipit aliquid, quis, ratione nostrum. Non, adipisci sint!</p>
                        <a href="#" id="trynow"  class="myButton register">Try Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="landing_section_content_part2 animate__animate animate__fadeInTopRight">
                      <img src="images/landing_image.png" alt="">

                  </div>
              </div>
            </div>
        </div>

    </div>
</section>

<!-- End Landing -->

<!-- services  -->
<section class="services" id="services"  data-aos="fade-right">
<div class="services-head">
<h2> Services</h2>
</div>
<div class="services-body">
<div class="container">
 <div class="row">
   <div class="col-lg-4 col-sm-12">
     <div class="services-body-part-1">
       <i class="fas fa-laptop-code"></i>
       <h3>web design</h3>
       <p>Working with client and community, we deliver
         masterplans that create vibrant new places
         and spaces, attract people, and encourage investment through.</p>
     </div>
   </div>
   <div class="col-lg-4 col-sm-12">
     <div class="services-body-part-1">
       <i class="fas fa-mobile-alt"></i>
       <h3>mobile coding</h3>
       <p>Working with client and community, we deliver
         masterplans that create vibrant new places
         and spaces, attract people, and encourage investment through.</p>
     </div>
   </div>
   <div class="col-lg-4 col-sm-12">
     <div class="services-body-part-1">
       <i class="far fa-gem"></i>
       <h3>illustration</h3>
       <p>Working with client and community, we deliver
         masterplans that create vibrant new places
         and spaces, attract people, and encourage investment through.</p>
     </div>
   </div>
 </div>
</div>
</div>
</section>
<!-- End services -->

<!-- start contact -->
<div class="container text-center" id="contact" data-aos="flip-left">
<div class="card p-5">
 <div class="row">
     <div class="col-md-12">
         <div class="row">
             <div class="col-md-6"> <input type="text" placeholder="name" class="form-control" /> </div>
             <div class="col-md-6"> <input type="text" placeholder="email" class="form-control" /> </div>
         </div>
         <div class="row mt-3">
             <div class="col-md-12"> <textarea class="form-control textarea" rows="4">message </textarea> </div>
         </div>
         <div class="send-button mt-4"> <button class="button">Send Message</button> </div>
     </div>
 </div>
</div>
</div>


<!-- end contact -->
@endsection
