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
         <img class="first-slide" src="images/kiki.jpg" alt="First slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>{{ $website_name }}</h1>
             <p>{{ $where_am_i }}</p>
           </div>
         </div>
       </div>
       <div class="item">
         <img class="second-slide" src="images/Austin.jpg" alt="Second slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>{{ $website_name }}</h1>
             <p>{{ $what_am_i }}</p>
           </div>
         </div>
       </div>
       <div class="item">
         <img class="third-slide" src="images/argo.jpg" alt="Third slide">
         <div class="container">
           <div class="carousel-caption">
             <h1>{{ $website_name }}</h1>
             <p>{{ $who_am_i }}</p>
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


@stop
