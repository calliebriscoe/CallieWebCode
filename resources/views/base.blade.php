<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <style>
            html, body {
                height: 100%;
                min-height:100%;
            }

            body {
                padding: 0;
                width: 100%;
                font-weight: 100;
                font-family: 'Century Gothic';
            }

            h1 {
                font-size: 3.5em;
            }

            p {
                font-size: 1em;
            }


            th {
              padding: 1em;
            }

            .carousel {

              width: 100%;
              height: auto;
              left: 0;
              right: 0;
              position: absolute;


            }
            /* Since positioning the image, we need to help out the caption */
             .carousel-caption {
                z-index: 10;

            }

            .carousel-inner > .item > img {
                align-items: center;
                width: 100%;
                left: 0;
                right: 0;
            }

            .carousel-caption p {
                font-size: 3vw;
                margin-bottom:2vw;
            }

            .carousel-caption h1 {
                font-size: 8vw;
            }

            .body {
                text-align: center;
            }

            .content {
                text-align: center;
                display: inline-block;
                vertical-align: middle;
            }

            .navbar {
              margin-left: 2vm;
              margin-right: 2vm;
            }

            .navbar-wrapper {
               top: 0;
               left: 0;
               right: 0;
            }

            .footer {
              margin-left: 1em;
              margin-right: 1em;
              position: inherit;
              text-align: center;
              bottom:0;

            }

            .section {
              margin: 100px;
            }

            .image_experience > img {
                align-items: center;
                width: 250px;
                height:auto;
            }

            .text_experience_right {
              text-align: right;
            }

        </style>

        <script>
          $(function(){
            // You used .myCarousel here.
            // That's the class selector not the id selector,
            // which is #myCarousel
            $('#myCarousel').carousel();
        </script>

        <title>Callie Briscoe's Website</title>

    </head>
    <body>
      <!--Navigation Bar-->
      <div class="navbar-wrapper">
        <div class="container">

      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
          <a class="navbar-brand" href="/">Callie Briscoe's Website</a>
              </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="experience">Experience</a></li>
              <li><a href="education">Education</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="contact">Contact Me</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="body">
        <div class="container">
          <div class="content">
              @yield('home')
              @yield('menu.contact')
              @yield('menu.experience')
              @yield('menu.education')
              @yield('menu.blog')
          </div>
        </div>
    </body>

    <footer>
      <div class="footer">
      <p class="pull-right"><a href="/">Back to top</a></p>
      <p> Created by Callie Briscoe in one weekend in November 2015. Self-taught components of this website: Homestead, Laravel, and AWS.
        See my code for this website and others like it on <a href="https://github.com/calliebriscoe/">Github</a>.</p>
    </div>
    </footer>
  </div>



</html>
