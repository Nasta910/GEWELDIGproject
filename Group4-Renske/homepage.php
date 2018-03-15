<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="stylesheet.css">


</head>
<body>


<table border='1' width='100%' cellspacing='5px'>
	<tr>
		<td style= 'background-color: rgb(153, 204, 0);' width="10%"> <img src= "https://www.global-exploration.nl/wordpress/wp-content/uploads/2013/11/cropped-GLOBAL-LOGO-klein-kopie.png" width="100%"></td>
		<td style= 'background-color: rgb(153, 204, 0);'><p><center><h1><b><font color="white">Global Exploration Classroom</font></b></h1></center></p></td>
		<td style= 'background-color: rgb(153, 204, 0);'> <center><button onclick="#" "width:100%;"><a href="profile.php" style="text-decoration:none"><h2 style= 'color:White;'>Profile</h2></a></button><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;"><h2>Login</h2></button></center></td>
	</tr>
</table>

<!--buttons for the page-->


<br>
<div class="dropdown">
  <a href="homepage.php" style="text-decoration:none" button class="dropbtn">Home</a>
  <div class="dropdown-content">
  </div>
</div>


<div class="dropdown">
  <a href="About.php" style="text-decoration:none" button class="dropbtn">About</a>
  <div class="dropdown-content">
  </div>
</div>


<div class="dropdown">
	<a href="classroom.php" style="text-decoration:none" button class="dropbtn">Classroom</a>
	<div class="dropdown-content">
	</div>
</div>

<div class="dropdown">
	<a href="contact.php" style="text-decoration:none" button class="dropbtn">Contact</a>
	<div class="dropdown-content">
	</div>
</div>

<!--hier staat een lijn-->

<hr>

<!--hier staat een box voor tekst-->
<div class="boxed">


 <!--hier staat een slideshow-->
 <div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="http://www.words-chinese.com/images2/chinese_symbols_for_header_7476_2_21.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="https://data.whicdn.com/images/27497216/original.png" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="https://data.whicdn.com/images/120360103/original.png" style="width:100%">
  <div class="text"></div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>



</div>

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

<!--aparte button-->


<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
