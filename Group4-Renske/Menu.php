<!DOCTYPE html>
<html>
<head>
<title>Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

<table border='1' width='100%' cellspacing='5px'>
	<tr>
		<td style= 'background-color: #99cc00;' width="10%"> <img src= "GlobalLogo.png" widht="125px" height="125px"></td>
		<td style= 'background-color: #99cc00; color:White;'><p><center><h1><b>Global Exploration Classroom</b></h1></center></p></td>
		<td style= 'background-color: #99cc00; color:White;'> <center><button onclick="#" "width:5;"><h2 style= 'color:White;'>Profile</h2></button><br><button onclick="document.getElementById('id01').style.display='block'" "width:5;"><h2 style= 'color:White;'>Login</h2></button></center></td>
	</tr>
</table>

<!--buttons for the apge-->

<a href="#" class="linkbutton" >Home page</a>
<a href="#" class="linkbutton">About</a>
<a href="#" class="linkbutton">Classmates</a>
<a href="#" class="linkbutton">Contact</a> 

<!--Line-->
<hr>

<!--button staat hier-->


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
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

</body>
</html>