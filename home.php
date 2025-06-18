<?php	

include("include/new.php");
include("include/conn.php");

?>


<!DOCTYPE html>
<html>
<head><title>home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

</style>

</head>
<body>
<div class="btn" style="width: 1900px"><h3>Anand Vishwa Gurukul Sr. Night College</h3></div>
<div class="  " >
	<h1 align="center" >AVG REQUISTION SYSTEM</h1>
	</div>
	<div class="header">
	<h1 align="center">choose login</h1>
	</div>
<div align="center">	
<table align="center"><td>
<div class="dropdown" >
  <button onclick="myFunction()" class="dropbtn" style="margin: 50px">LOGIN</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="userlogin.php">USER LOGIN</a>
    <a href="principallogin.php">PRINCIPAL LOGIN</a>
    <a href="adminlogin.php">ADMINISTRATOR LOGIN</a>
    <a href="accountantlogin.php">ACCOUNTANT LOGIN</a>
  </div>
</div></td>
</table></div>
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
<footer style="background-color: #5F9EA0;
  padding: 0.01px;
  text-align: right;
  color: white;
  margin: 200px"
  >
  <label>developed by avg team</label>
</footer>
</body>
</html>
