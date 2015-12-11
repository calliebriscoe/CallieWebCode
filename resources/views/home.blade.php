@extends('base')

@section('home')

                <!-- Carousel
   ================================================== -->
   <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
     <!-- Indicators -->
     <ol class="carousel-indicators">
       <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
       <li data-target="#myCarousel" data-slide-to="1"></li>
       <li data-target="#myCarousel" data-slide-to="2"></li>
     </ol>
     <div class="carousel-inner" role="listbox">
       <div class="item active">
         <img class="first-slide" src="images/Austin.jpg" alt="First slide">
         <div class="container">
           <div class="carousel-caption">
             <!-- <h1>{{ $home['website_name'] }}</h1> -->
             <p>{{ $home['what_am_i'] }} See my <a href="/#experience" style="color: #00b2bd">experience</a>.</p>
           </div>
         </div>
       </div>
       <div class="item">
         <img class="second-slide" src="images/Kiki.jpg" alt="Second slide">
         <div class="container">
           <div class="carousel-caption">
             <!-- <h1>{{ $home['website_name'] }}</h1> -->
             <p>{{ $home['where_am_i'] }} See my <a href="/#education" style="color: #00b2bd">education</a>.</p>
           </div>
         </div>
       </div>
       <div class="item">
         <img class="third-slide" src="images/argo.jpg" alt="Third slide">
         <div class="container">
           <div class="carousel-caption">
             <!-- <h1>{{ $home['website_name'] }}</h1> -->
             <p>{{ $home['who_am_i'] }} <a href="/#contact" style="color: #00b2bd">Contact me</a>.</p>
           </div>
         </div>
       </div>
     </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
   </div><!-- /.carousel -->

   <div class ="main_page">
     <div id="experience">
     <table>
     <tr>
     <div class="section">
           <hr class="featurette-divider">
       <div class="sub_title">
         <h1>Experience</h1>
       </div>
     </tr>
       <div>

     @if (count($experiences) > 1)
     @foreach ($experiences as $experience)
     @if ($experience['id'] % 2 == 0)

         <hr class="featurette-divider">
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <th width="70%">
           <div class="row featurette">
             <div class="text_experience">
               <h1 class="featurette-heading">{{ $experience['job_title'] }}</h1>
               <h2 class="featurette-date">{{ $experience['company'] }}</br><span class="text-muted">{{ $experience['start_date'] }} - {{ $experience['end_date'] }}</span></h2>
             </div>
         </th>
         <th width="30%">
             <div class="image_experience_left">
               <img class="featurette-image img-responsive" src="{{ $experience['image'] }}">
             </div>
         </th>
         </div>
         </tr>
       </table>
         <tr>
             <p class="text">{{ $experience['description'] }}</p>
      </tr>
     @else
         <hr class="featurette-divider">
         <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <div class="row featurette">
             <td width="30%">
                 <div class="image_experience">
                   <img class="featurette-image img-responsive" src="{{ $experience['image'] }}">
                 </div>
             </td>
             <td width="70%">
             <div class="text_experience_right">
               <h1 class="featurette-heading">{{ $experience['job_title'] }}</h1>
               <h2 class="featurette-date">{{ $experience['company'] }}</br><span class="text-muted">{{ $experience['start_date'] }} - {{ $experience['end_date'] }}</span></h2>
             </div>
         </td>
         </div>
         </tr>
         </table>
         <tr>
             <p class="text">{{ $experience['description'] }}</p>
         </tr>
     @endif
     @endforeach
     @endif
       </table>
       </div>
     </div>
   </div>

   <div id="education">
     <div class="section">
           <hr class="featurette-divider">
       <div class="sub_title">
         <h1>Education</h1>
       </div>
       <div>

     @if (count($educations) > 1)
     @foreach ($educations as $education)
         <hr class="featurette-divider">
         <div class="container marketing">
           <div class="school_image">
           <div class="item">
             <img class="img_school" src="{{ $education['main_image_edu'] }}">
             <div class="container">
               <div class="caption">
                 <h1>{{ $education['school'] }}</h1>
                 <h2>{{ $education['start_date'] }} - {{ $education['end_date'] }}</h2>
                 <p>{{ $education['description'] }}</p></br>
               </div>
             </div>
           </div>
           <!-- Three columns of text below the carousel -->
           <div class="img">
           </div>
           <div class="row">
             <div class="col-lg-4">
               <img class="img-circle" src="{{ $education['skill_img_1'] }}" alt="Generic placeholder image" width="140" height="140">
               <h2>{{ $education['skill_head_1'] }}</h2>
               <p>{{ $education['skill_desc_1'] }}</p>
             </div><!-- /.col-lg-4 -->
             <div class="col-lg-4">
               <img class="img-circle" src="{{ $education['skill_img_2'] }}" alt="Generic placeholder image" width="140" height="140">
               <h2>{{ $education['skill_head_2'] }}</h2>
               <p>{{ $education['skill_desc_2'] }}</p>
             </div>
             <div class="col-lg-4">
               <img class="img-circle" src="{{ $education['skill_img_3'] }}" alt="Generic placeholder image" width="140" height="140">
               <h2>{{ $education['skill_head_3'] }}</h2>
               <p>{{ $education['skill_desc_3'] }}</p>
               </div><!-- /.col-lg-4 -->
           </div><!-- /.row -->
         </div>
     @endforeach
     @endif
     </div>
     </div>
   </div>

   <div id="contact">
     <div class="section">
           <hr class="featurette-divider">

     <div class="sub_title"><h1>{{ $title }}</h1></div>

     <div class="sub_title">
         <hr class="featurette-divider">
     <h2><img class="logo" src="images/CBlogo.jpg"></h2>
     <h2>Feel free to see more on my <a href="http://www.linkedin.com/pub/callie-briscoe/61/838/4a8" style="color: #00b2bd">LinkedIn</a>.</h2>
     <h2>Or email me at <a href="mailto:calliebriscoe@gmail.com" style="color: #00b2bd">calliebriscoe@gmail.com</a>.</h2>
     <h2>See my code for this website and others like it on <a href="https://github.com/calliebriscoe/" style="color: #00b2bd">Github</a>.</h2>
     </div>
   </div>

 </div>


@stop
