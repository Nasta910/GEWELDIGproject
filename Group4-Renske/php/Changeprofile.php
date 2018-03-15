<!DOCTYPE html>
<!-- Author: Noah // Standard layout of a HTML document -->
<html>
<head>
    <title>Global Exploration Digital Classroom</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
		
<center><table class="well-lightgreen" border='1' width='100%' cellspacing='5px'>
	<tr width="50">
		<td>
		<center><H3>Student Register: </H3></center>
		</td>
	</tr>
	<tr>
		<td>
		<form action="" method="post">
		UserName:<br>
		<input type="text" name="UserName" required value='<?php echo($sUserName); ?>'>
	</tr>
	<tr>
		</td>
		<td>
		Password:<br>
		<input type="Password" name="Password" required>
		
		</td>
	</tr>
	<tr>
		<td>
		Hobbies:<br>
		<textarea name="Hobbies" cols="50" rows="4" required>
		</textarea>
		</td>
	</tr>
	<tr>
		<td>
		Class:<br>
		<input type="text" Name="Class" required>
		</td>
	</tr>
	<tr>
		<td>
		<center>Your profile picture: <input type="file" class="picupload" name="picture" id="picture"></center><br>	
		</td>
	</tr>
	<tr>
		<td>
		<center><input type="submit" class="submit" Value="Submit"></center>
		</td>
	</tr>
	</form>
</table></center>