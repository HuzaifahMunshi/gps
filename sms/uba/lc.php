<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>LEAVING CERTIFICATE FORM</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style type="text/css">
		#form1{
			border-radius: 10px;
			border: 3px solid black;
			width:850px;
			height: 100%;
		}
		#btn{
			background-color: #DD1146;
			color: white;
			height: 40px;
			border:2px solid black;
			border-radius: 10px;
		}
		#btn:hover{
			box-shadow: 5px 5px 5px grey;
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
	</style>
</head>
<body bgcolor="#fff">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="ccard.php">मुख्य पृष्ठ </a>
   <a href="view.php">विद्यार्थ्यांची माहिती बघा</a>
    <a href="pass.php">विद्यार्थी उत्तीर्ण करा </a>
     <a href="about.php">About Us</a>
  <a href="logout.php">बाहेर पडा</a>
</div>
<h1 id="head1"><span style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>&nbsp;&nbsp;<font style="color: #400C0C;font-style: bold;">जिल्हा परिषद पूर्ण प्राथमिक शाळा मुंढे तर्फे सावर्डे</font></h1>

<br>


<center>
<form action="lcprev.php" id="form1" method="POST">
		<table cellpadding="15" width="800px">
		<tr>
			<td colspan="4" align="center"><font style="font-size: 24px; font-style: bold;">शाळा सोड्याण्याच्या दाखल्याबाबत </font></td>
		</tr>
			<tr>
			<td>रजिस्टर नं.: </td><td><input type="text" style="width: 100%;" name="reg" placeholder="Enter Register No..." required /></td>
			<td>आधार कार्ड क्रमांक : </td><td><input type="text" style="width: 100%;" name="aadhar" placeholder="Enter Aadhar No..." required /></td>
		</tr>
		<tr>
			<td>हजेरी क्र. : </td><td><input type="text" style="width: 100%;" name="rno" placeholder="Enter Roll No..." required /></td>

		<td colspan="2">

		<select name="std" style="height:40px;width: 100%;" required>
  			<option value="">-- Select Standard --</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>	
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>	
			<option value="8">उत्तीर्ण विद्यार्थी</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>आय डी नं. :  </td>
		<td><input type="text" name="id" style="width: 100%;" required></td>
		<td>यापूर्वीची शाळा व इयत्ता :  </td>
		<td><input type="text" name="prevschl" style="width: 100%;" required></td>
	</tr>

	<tr>
				<td>वर्तणूक :  </td>
		<td><input type="text" name="behaviour" style="width: 100%;" required></td>
				<td>अभ्यासातील प्रगती :  </td>
		<td><input type="text" name="pragati" style="width: 100%;" required></td>
	</tr>
	
	<tr>
				<td>शाळा सोडल्याचे कारण :  </td>
		<td><input type="text" name="reason" style="width: 100%;" required></td>
				<td>शेरा : </td>
		<td><input type="text" name="remark" style="width: 100%;" required></td>
	</tr>
	<tr>
		<td>शाळा सोडल्याचा दिनांक :</td>
		<td><input type="date" name="leavingdate" style="width: 100%;" required></td>
</tr><tr>
		<td colspan="4"><input type="submit" value="SEARCH / शोधा " id="btn" style="width: 100%; font-size: 20px;font-style: bold;" name="btnLc"></td>
	</tr>
</table>
</form>
</center>

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

<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
</body>
</html>