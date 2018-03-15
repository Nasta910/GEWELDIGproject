<!DOCTYPE html>
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

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--button eindigt hier-->

<div class='col-xs-2 col-sm-2 col-md-2 col-lg-5 align-left'>                <!-- Left part of the header block -->
	<div class="well well-lightgreen view overlay">
<table width="400" height="300" bgcolor="#99cc00" border="1" cellspacing="3">
<!--xxx-->	
	<tr>
		<td><b>Leerlingen<b></td>
		<td><b>Leerlingnummer<b></td>
	</tr>
<!--xxx-->
	<tr>
		<td>Rebelske</td>
		<td>39410</td>
	</tr>		
<!--xxx-->
	<tr>
		<td>Nina</td>
		<td>12409</td>
	</tr>
<!--xxx-->
	<tr>
		<td>Noah</td>
		<td>89481</td>
	</tr>
<!--xxx-->
	<tr>
		<td>Liam</td>
		<td>95329</td>
	</tr>
<!--xxx-->
<!--xxx-->
<!--xxx-->
		
</table>
	</div>
</div>
<div class='col-xs-2 col-sm-2 col-md-2 col-lg-2 align-left'>                <!-- Left part of the header block -->
	<div class="well well-lightgreen view overlay">
	<td class="linkbutton2" Width="135"><center><a href="Adminpage.php" style="text-decoration:none"><font color="White"><h4>Add Student, classes or teachers here.</h4></a></center></td>
	</div>
</div>

</body>
</html>