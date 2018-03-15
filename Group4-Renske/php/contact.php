<!DOCTYPE HTML>
<!-- Author: Renske // Standard layout of a HTML document -->
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


		
		
		<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12 align-left'>                <!-- Left part of the header block -->
			<div class="well well-lightgreen">  
                                    <!-- Fill color left part of the header block -->
				
			<form action="/action_page.php">
			<center><label for="fname">First Name</label><br>
			<center><input type="text" id="fname" name="firstname" placeholder="Your First Name..."><br>

			<center><label for="lname">Last Name</label><br>
			<center><input type="text" id="lname" name="lastname" placeholder="Your Last Name..."><br>

			<center><label for="subject">Any Remarks or Questions:</label><br>
			<center><textarea id="subject" name="subject" placeholder="Put any Remarks or Questions here..." style="height:200px"></textarea><br>

			<center><input type="submit" value="Submit"></center>
		</form>
				
				<center><h3>
				Phone Number: <br> 06-51004487 <br>
				E-Mail: <br> info@global-exploration.nl  <br>
				Adress: <br> Groot Haasdal 15, 6333 AV Schimmert <br> </h3></center>
			</div>
		</div>
		
		
		
		
		
		



</body>
</html>
