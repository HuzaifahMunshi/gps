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
  color: blue;
  background-color: transparent;
  text-decoration: none;
}

a.a1:active {
  color: black;
  background-color: transparent;
  text-decoration: none;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  align-self:center;
  width: 300px;
  border: 10px solid black;
  border-radius: 15px;
    height: 330px;
}
#pic1{
	height: 120px;
	
}
#pic{
	height: 200px;
	width: 300px;
}
.card:hover {
    width: 310px;
    
  box-shadow: 10px 20px 16px 0 #C29B92;
}

img {
  border-radius: 5px 5px 0 0;
}
#h1{
	text-align: center;

    
}

.container {
  padding: 8px 8px;
}
#head{
	font-size: 40px;

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
html { 
  //background: url(certi.jfif) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  #div11{
    border: 3px solid black;
    height: 500px;
    width: 1000px;
  }
</style>
</head>
<body>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="ccard.php">मुख्य पृष्ठ </a>
  <a href="view.php">विद्यार्थ्यांची माहिती बघा</a>
  <a href="about.php">About Us</a>
  <a href="logout.php">बाहेर पडा</a>
</div>
<h1 id="head1"><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>&nbsp;&nbsp;<font style="color: #400C0C;font-style: bold;">जिल्हा परिषद पूर्ण प्राथमिक शाळा मुंढे तर्फे सावर्डे</font></h1>

<br>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


<center>
<div id="div11">

<h1>प्रमाणपत्र</h1>
<table cellpadding="25" border="0">
	<tr>
		<td><center>
            <div class="card" id="c1" style="padding-top:3px;padding-left:10px;">
  <img src="bona.jfif" id="pic" style="width: 250px" align="center">
  <div class="container" text-align="center">
      <h1 id="h1"><b><a href="bonafide.php" class="a1" >बोनाफाईड<br> पत्रक </b></a></h1> 
     
  </div>
	</div>
            </center>

		</td>
		<td align="center">
			<div class="card" id="c2" style="padding-top:3px;padding-left:5px;">
  <img src="lc.jfif" id="pic" style="width: 250px" align="centre"><br>
  <div class="container">
    <h1 id="h1"><b><a href="lc.php" class="a1" >शाळा सोडल्याचे प्रमाणपत्र </a></b></h1> 
     
  </div>
</div>

		</td>
	</tr>
</table>

</div>
</center>

<br>
<br>
<br>
<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
</body>
</html> 
