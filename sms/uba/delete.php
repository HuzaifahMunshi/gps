<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}else{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uba";

$reg=$_POST['regdel'];
$aadhar=$_POST['aadhardel'];
$roll=$_POST['rnodel'];
$std=$_POST['stddel'];
if($std=="1"||$std=="2"||$std=="3"||$std=="4"||$std=="5"||$std=="6"||$std=="7"){
	$sql="delete from std".$std." where reg='".$reg."' AND aadhar='".$aadhar."' AND rollno='".$roll."'";
}else{
	$sql="delete from exist_student where reg='".$reg."' AND aadhar='".$aadhar."' AND rollno='".$roll."'";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>UPDATE</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style type="text/css">
			#btn{
		width: 250px;
		height: 50px;
		border-radius: 10px;
		font-size: 25px;
		background-color: #D93838;
		color: white;
		border: 1px solid black;
		transition: 0.3s ease;
	}
	#btn:hover{
		box-shadow: 4px 3px 5px grey;
		background-color: #E72727;
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
<body>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="ccard.php">मुख्य पृष्ठ </a>
   <a href="view.php">विद्यार्थ्यांची माहिती बघा</a>
      <a href="pass.php">विद्यार्थी उत्तीर्ण करा </a>
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
<center>
<form action="view.php">
	<input type="submit" class="btn-grad" value="Back To View Page" id="btn" />
</form>
</center>
<?php

if(isset($_POST['btnDelete'])){

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
$result=$conn->query($sql);
if ($result===TRUE) {
	if($conn->affected_rows>0){
		echo "<script> alert('Record Deleted Successfully!!!'); </script>";
	}else{
		echo "<script> alert('Failed to delete!!!'); </script>";
	}
	
} else {
    echo "<script> alert('Error deleting record: ". $conn->error ."'); </script>";
}

$conn->close();
}


?>

<br>
<br>
<br>
<br>

<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
</body>
</html>
<?php
}
?>