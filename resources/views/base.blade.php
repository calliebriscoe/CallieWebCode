<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

        <style>

            /* GLOBAL STYLES
            -------------------------------------------------- */
            /* Padding below the footer and lighter body text */

            head, body {
              padding-bottom: 40px;
              color: #5a5a5a;
              font-weight: 100;
              font-family: 'Century Gothic';
              padding-right: 0; /*15px in bootstrap.css*/
              padding-left: 0;  /*idem*/
              text-align: center;
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

            .content {
              margin-right: auto;
              margin-left: auto;
            }

            .main_page {
              margin-top: 0vw;
            }

            /* CUSTOMIZE THE NAVBAR
            -------------------------------------------------- */

            /* Special class on .container surrounding .navbar, used for positioning it into place. */
            .navbar-wrapper {
              position: absolute;
              top: 0;
              right: 0;
              left: 0;
              z-index: 20;
            }

            /* Flip around the padding for proper display in narrow viewports */
            .navbar-wrapper > .container {
              padding-right: 0;
              padding-left: 0;
            }
            .navbar-wrapper .navbar {
              padding-right: 15px;
              padding-left: 15px;
            }
            .navbar-wrapper .navbar .container {
              width: auto;
            }


            /* CUSTOMIZE THE CAROUSEL
            -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
              height: 50vw;
              margin-bottom: 60px;
            }
            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
              z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel .item {
              height: 50vw;
              background-color: #777;
            }
            .carousel-inner > .item > img {
              top: 0;
              left: 0;
              min-width: 100%;
              height: 50vw;
            }


            /* MARKETING CONTENT
            -------------------------------------------------- */

            /* Center align the text within the three columns below the carousel */
            .marketing .col-lg-4 {
              margin-bottom: 20px;
              text-align: center;
            }
            .marketing h2 {
              font-weight: normal;
            }
            .marketing .col-lg-4 p {
              margin-right: 10px;
              margin-left: 10px;
            }


            /* Featurettes
            ------------------------- */

            .featurette-divider {
              margin: 80px 0; /* Space out the Bootstrap <hr> more */
            }

            /* Thin out the marketing headings */
            .featurette-heading {
              font-weight: 300;
              line-height: 1;
              letter-spacing: -1px;
            }


            /* RESPONSIVE CSS
            -------------------------------------------------- */

            @media (min-width: 768px) {
              /* Navbar positioning foo */
              .navbar-wrapper {
                margin-top: 20px;
              }
              .navbar-wrapper .container {
                padding-right: 15px;
                padding-left: 15px;
              }
              .navbar-wrapper .navbar {
                padding-right: 0;
                padding-left: 0;
              }

              /* The navbar becomes detached from the top, so we round the corners */
              .navbar-wrapper .navbar {
                border-radius: 4px;
              }

              /* Bump up size of carousel content */
              .carousel-caption p {
                margin-bottom: 20px;
                font-size: 28px;
                line-height: 1.4;
              }

              .featurette-heading {
                font-size: 50px;
              }
            }

            @media (min-width: 992px) {
              .featurette-heading {
                margin-top: 120px;
              }
            }

            .footer {
              margin-left: 1em;
              margin-right: 1em;
              position: inherit;
              text-align: center;
              bottom:0;

            }
            .image_experience > img {
                align-items: center;
                width: 250px;
                height:auto;
            }

            .text_experience_right {
              text-align: right;
            }

            .img_school {
              align-items: center;
              height:auto;
              width: 100%;
              top: 0;
              left: 0;
              right: 0;
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
        <link rel="shortcut icon" href="images/CBlogo.jpg" />

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
              <li><a href="#experience">Experience</a></li>
              <li><a href="#education">Education</a></li>
              <li><a href="blog">Blog</a></li>
              <li><a href="#contact">Contact Me</a></li>
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
              @yield('menu.blog')
          </div>
        </div>

        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
    <hr class="featurette-divider">
    <footer>
      <div class="footer">
      <p class="pull-right"><a href="/">Back to top</a></p>
      <p> Created by Callie Briscoe in one weekend in November 2015. Self-taught components of this website: Homestead, Laravel, and AWS.
        See my code for this website and others like it on <a href="https://github.com/calliebriscoe/">Github</a>.</p>
    </div>
    </footer>
  </div>



</html>
