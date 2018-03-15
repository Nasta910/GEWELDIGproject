<?php
if(!empty($_POST)){
	var_dump($_POST);
	exit;
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Global Exploration Digital Classroom</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content'width=device-width, initial-scale=1.0'>
        <!-- Bootstrap Stylesheet -->
        <link rel='stylesheet' type='text/css' href='../stylesheets/bootstrap.css'>
        <!-- Latest compiled and minified JavaScript & ajax -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
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

<!--button staat hier-->


<center><table class='well-lightgreen' border='1' width='100%' cellspacing='5px'>
	<tr width='50'>
		<td>
		<center><H3>Student Register: </H3></center>
		</td>
	</tr>
	<tr>
		<td>
		<form action='' method='post'>
		UserName:<br>
		<input type='text' name='UserName' required>
	</tr>
	<tr>
		</td>
		<td>
		Password:<br>
		<input type='Password' name='Password' required>
		
		</td>
	</tr>
	<tr>
		<td>
		Hobbies:<br>
		<textarea name='Hobbies' cols='50' rows='4' required>
		</textarea>
		</td>
	</tr>
	<tr>
		<td>
		Class:<br>
		<input type='text' Name='Class' required>
		</td>
	</tr>
	<tr>
		<td>
		<center>Your profile picture: <input type='file' class='picupload' name='picture' id='picture'></center><br>	
		</td>
	</tr>
	<tr>
		

<p>
<!-- Button trigger modal -->
<button class='buttonsubmit' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>
 Submit
</button> 	

<!-- Modal -->
<div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
</p>
				
<br>
		

	</form>
<br>
<br>

<center><table class='well-lightgreen' border='1' width='100%' cellspacing='5px'>
	<tr width='50'>
		<td>
		<center><H3>Teacher Register: </H3></center>
		</td>
	</tr>
	<tr>
		<td>
		<form method='post'>
		UserName:<br>
		<input type='text' name='UserNameTeacher' required>
	</tr>
	<tr>
		</td>
		<td>
		Password:<br>
		<input type='Password' name='PasswordTeacher' required>
		
		</td>
	</tr>
	<tr>
		<td>
		Classes:<br>
		<input type='text' id='Classes' Name='ClassesTeacher' required>
		</td>
	</tr>
	<tr>
		<td>
		<center>Your profile picture: <input type='file' class='picupload' name='pictureTeacher' id='picture'></center><br>	
		</td>
	</tr>
	<tr>
		<td>
		<center><input type='submit' class='submit' Value='Submit'></center>
		</td>
	</tr>
	</form>
</table></center>

<br>
<br>

<center><table class='well-lightgreen' border='1' width='100%' cellspacing='5px'>
	<form action='' method='post'>
	<tr width='50'>
		<td>
		<center><H3>Class Register: </H3></center>
		</td>
	</tr>
	<tr>
		<td>
		Class:<br>
		<input type='text' id='Classes' Name='ClassName' required>
		</td>
	</tr>
	<tr>
		<td>
		Teacher(s):<br>
		<input type='text' id='Teacher' Name='Teacher(s)' required>
		</td>
	</tr>
	<tr>
		<td>
		Students:<br>
		<textarea name='Students' cols='50' rows='20' required>
		</textarea>
		</td>
	</tr>	
	<tr>
		<td>
		<center><input type='submit' class='submit' Value='Submit'></center>
		</td>
	</tr>
	</form>
</table></center>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>

<!--button eindigt hier-->

</body>
</html>