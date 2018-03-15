<!DOCTYPE html>
<!-- Author: Noah // Standard layout of a HTML document -->
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
            require_once '/loginheader.php';
            require_once '/menu.php';
            ?>
		<div class='row'>  
			<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 align-left'>                <!-- Left part of the header block -->
				<div class="well well-lightgreen view overlay">		
					<td class="linkbutton2" Width="135"><center><a href="partnerup.php" style="text-decoration:none"><font color="White"><h2>partner up!</h2></a></center></td>
					<td href="#" class="linkbutton2" Width="135"><center><a href="./chatpagina.php" style="text-decoration:none"><font color="White"><h2>Chat Room</h2></a></center></td>
					<td class="linkbutton2" Width="135"><center><a href="Teacher.php" style="text-decoration:none"><font color="White"><h3>Teacher</h3></a></center></td>
				</div>
			</div>
			<?php 
			for($sPhotocounter=0;$sPhotocounter<15;$sPhotocounter++){
				echo("<div class='col-xs-1 col-sm-1 col-md-1 col-lg-2 align-right'>                <!-- Left part of the header block -->");
					echo("<div class='well well-darkgreen'>");
						echo("<image src='../images/Vladimir_Putin.jpg' title='Vladimir Putin' width='100%'	>");
					echo("</div>");
				echo("</div>");
			}
			?>
		</div>

</body>
</html>
