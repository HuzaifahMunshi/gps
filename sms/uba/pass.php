<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "uba";

	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['btnForward'])){
	if($_POST['username']=="admin" && $_POST['password']=="admin123"){
$sql="INSERT INTO exist_student (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std7";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}

$sql="TRUNCATE TABLE std7";
$res=$conn->query($sql);

$sql="INSERT INTO std7 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std6";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}

$sql="UPDATE `std7` SET `cstd`='7' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}

$sql="TRUNCATE TABLE std6";
$res=$conn->query($sql);

$sql="INSERT INTO std6 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std5";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}

$sql="UPDATE `std6` SET `cstd`='6' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="TRUNCATE TABLE std5";
$res=$conn->query($sql);

$sql="INSERT INTO std5 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std4";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="UPDATE `std5` SET `cstd`='5' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}



$sql="TRUNCATE TABLE std4";
$res=$conn->query($sql);

$sql="INSERT INTO std4 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std3";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="UPDATE `std4` SET `cstd`='4' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}


$sql="TRUNCATE TABLE std3";
$res=$conn->query($sql);

$sql="INSERT INTO std3 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std2";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="UPDATE `std3` SET `cstd`='3' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="TRUNCATE TABLE std2";
$res=$conn->query($sql);

$sql="INSERT INTO std2 (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="UPDATE `std2` SET `cstd`='2' WHERE 1";
$res=$conn->query($sql);
if (!$res === TRUE) {
  		echo "<script> alert('Error while updating table!!!'); </script>";
}
$sql="TRUNCATE TABLE std1";
$res=$conn->query($sql);
$conn->close();
echo "<script>alert('Student Promoted Successfully!!!'); </script>";
}else{
echo "<script>alert('Invalid Usename or password!!!'); </script>";	
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN AUTHENTICATION</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style type="text/css">
		#for1{
			height: 350px;
			width: 400px;
			border-radius: 15px;
			border: 4px solid black;
			margin-top: 100px;
			margin-left: 530px;
		}
		#t1{
			height: 37px;
			width: 370px;
			border-radius: 20px;
			font-size: 16px;
		}
		#btn{
			height: 40px;
			width: 94%;
			background-color: #C81040;
			color: white;
			font-style: bold;
			font-size: 20px;
			font-style: bold;
			border: 1px solid black;
			border-radius: 10px; 
			transition: 0.2s ease;
		}
		#btn:hover{
			box-shadow: 3px 6px 10px grey;
			background-color: #B5113C;
		}
		#img{
			margin-top: -45px;
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


<form action="pass.php" id="for1" method="POST">
	<center><img src="log.png" width="90px" height="90px" id="img"></center>
	
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username :</label><br>
	<center><input type="text" name="username" value="" placeholder=" Enter Username..." id="t1" required></center><br><br>
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password :</label><br>
	<center><input type="password" name="password" value="" placeholder=" Enter Password..." id="t1" required></center><br><br><br>
	<center><input type="submit" name="btnForward" id="btn" value="SUBMIT" required></center><br>
	
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>

</body>
</html>