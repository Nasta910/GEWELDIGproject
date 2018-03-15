<!DOCTYPE HTML>
<!-- Author: Nina // Standard layout of a HTML document -->
<html>
    <head>
        <title>Global Exploration Digital Classroom</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content'width=device-width, initial-scale=1.0'>
        <!-- Bootstrap Stylesheet -->
        <link rel='stylesheet' type='text/css' href='../stylesheets/bootstrap.css'>
        <!-- Latest compiled and minified JavaScript & ajax -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>        
        <!-- Theme stylesheet -->
        <link rel='stylesheet' type='text/css' href='../stylesheets/stylesheet.css'>
        <!-- Font-awesome stylesheet -->
        <link rel='stylesheet' type='text/css' href='../stylesheets/font-awesome.css'>         
    </head>
    <body>                             
        <div class='container'>                                                       <!-- Start a new bootstrap container -->                           
            <?php
            require_once './loginheader.php';
            require_once './menu.php';
            ?>
        <!-- Main content of this page -->
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                  <img src="../images/carousel-img1.png" width="100%" alt="carosel image 1">
              </div>

              <div class="item">
                <img src="../images/carousel-img2.png" width="100%" alt="carosel image 2">
              </div>

              <div class="item">
                <img src="../images/carousel-img3.png" width="100%" alt="carosel image 3">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="fa fa-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="fa fa-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
        
        
        <!-- End main content of this page -->
	</div>
    </body>        
</html>