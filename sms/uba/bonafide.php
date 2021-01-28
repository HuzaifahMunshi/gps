
<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
	header("location: index.php");
}
?>	
<!DOCTYPE html>
	<html>
	<head>
		<title>bonafide page</title>
		<link rel="stylesheet" type="text/css" href="css.css">
		<style type="text/css">
			#fo1{
				border:3px solid black;
				width: 550px;
			}
			#head1{
    font-size: 35px;
    font-family: cursive;
  }
footer {
  display: block;
   position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #A81706;
  color: white;
  text-align: center;
}
#myBtn{
	width: 100%;
	height: 30px;
	background-color: #AE0934;
	color: white;
	transition: 0.2s ease;

}
#myBtn:hover{
	box-shadow: 2px 4px 10px grey;
}
		</style>
	</head>
	<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
<a href="ccard.php">मुख्य पृष्ठ </a>
   <a href="view.php">विद्यार्थ्यांची माहिती बघा</a>
    <a href="pass.php">विद्यार्थी उत्तीर्ण करा </a>
     <a href="about.php">About Us</a>
  <a href="logout.php">बाहेर पडा</a>
</div>
<h1 id="head1"><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>&nbsp;&nbsp;<font style="color: #400C0C;font-style: bold;">जिल्हा परिषद पूर्ण प्राथमिक शाळा मुंढे तर्फे सावर्डे</font></h1>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<br>
<br>
<br>

<center>
	<form action="bonaPrinting.php" id="fo1" method="POST">
	<table cellpadding="10">
	

	  <tbody>
	   <tr>
				<td colspan="2" align="center"><font style="font-size: 20px;"><b>बोनाफाईड फॉर्म</b></font></td>
			</tr>
			<tr>
			<td>रजि. नं.: </td><td><input type="text" style="width: 100%;" name="reg" placeholder="Enter Register No..." required /></td>

		</tr>
		<tr>
			<td>आधार न.: </td><td><input type="text" style="width: 100%;" name="aadhar" placeholder="Enter Aadhar No..." required /></td>
		</tr>
		<tr>
			<td>हजेरी क्र.: </td><td><input type="text" style="width: 100%;" name="rno" placeholder="Enter Roll No..." required /></td>
		</tr>
<tr>
	<td>जन्मतारीख अक्षरी :</td><td><input type="text" name="birth" style="width: 100%;" placeholder="Enter birthdate in words..." required></td>
</tr>
		<tr>

		<td colspan="2">

		<select name="std" id="current" style="width: 100%;" required>
  			<option value="">-- Select Standard --</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>	
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>	
			<option value="9">उत्तीर्ण विद्यार्थी</option>	
		</select>
		</td>
	</tr>


		<tr>
			<td colspan="4" align="center"><input type="submit" value="सबमिट करा" name="btnSub" id="myBtn"/></td>  
		</tr>

	  </tbody>
	</table>
</form>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  document.write('abhishek');
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</center>



<br>
<br>
<br>
<br>

<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
	</body>
	</html>