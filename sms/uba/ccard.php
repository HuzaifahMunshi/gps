<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
  header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css1.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
a.a1:link {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a.a1:visited {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

a.a1:hover {
  color: red;
  background-color: transparent;
  text-decoration: none;
}

a.a1:active {
  color: black;
  background-color: transparent;
  text-decoration: none;
}

html { 
  background: url(pic/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  align-self:center;
  width: 300px;
  border: 10px solid black;
  border-radius: 15px;
}
#pic1{
	height: 120px;
	
}
#pic{
	height: 200px;
	width: 300px;
}
.card:hover {
  box-shadow: 10px 20px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}
#h1{
	text-align: center;
}

.container {
  padding: 2px 16px;
}
#head{
	font-size: 40px;

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
<br>

<center>
<table cellpadding="25">
	<tr>
		<td>
      <form action="#">
		<div class="card" id="c1">
  <img src="pic/admision.png" href="admissionForm.php" id="pic">
  <div class="container">
    <h1 id="h1"><b><a href="admissionForm.php" class="a1">ADMISSION</a></b></h1> 
     
  </div>
	</div>
</form>
		</td>
		<!-- <td>
			<div class="card" id="c2" style="padding-top:3px;padding-left:30px;">
  <img src="pic/exam.png" id="pic">
  <div class="container">
    <h1 id="h1"><b>EXAMINATION</b></h1> 
     
  </div>
</div>

		</td>
		-->
		<td><div class="card">
  <img src="pic/certi.png" id="pic" style="padding-left:15px;padding-right:15px;padding-top: 4px;">
  <div class="container">
    <h1 id="h1"><b><a href="viewPage.php" class="a1">CERTIFICATE</a></b></h1> 
     
  </div>
</div>
</td>

	</tr>
</table>


</center>
<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
</body>
</html> 
