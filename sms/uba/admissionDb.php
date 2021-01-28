<?php

include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}else{
$fullname=$_POST['fullname'];
	$mothername=$_POST['mothername'];
	$std=$_POST['currentstd'];
	$caste=$_POST['caste'];
	$dob=$_POST['dob'];
	$dobplace=$_POST['dobplace'];
	$nationality=$_POST['nationality'];
	$gender=$_POST['gender'];
	$taluka=$_POST['taluka'];
	$district=$_POST['district'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$aadhar=$_POST['aadhar'];
	$dt=$_POST['todate'];
	$roll=$_POST['rollno'];
	$yr="20".date("y");
	$reg="20".date("y")."".$_POST['currentstd']."".$_POST['rollno'];
	$magas=$_POST['magas'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "uba";

$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$sql = "INSERT INTO std".$std." VALUES ('".$reg."','".$fullname."','".$mothername."','".$std."','".$caste."','".$dob."','".$dobplace."','".$nationality."','".$gender."','".$taluka."','".$district."','".$address."','".$phone."','".$aadhar."','".$dt."','".$yr."','".$roll."','".$magas."')";
		if ($conn->query($sql) === TRUE) {
  		

	echo "<script>alert('Student Registered successfully!!!'); </script>";
			
		} else {
    		echo "<script> alert('$conn->error'); </script>";
		}
		//header("location: admissionForm.php");
	}
$conn->close();

}
	
?>