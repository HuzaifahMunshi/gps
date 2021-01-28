
<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
	header("location: index.php");
}
	
?>


<!DOCTYPE html>
	<html>
	<head>
		<title>Admission Form</title>
		
		<link rel="stylesheet" type="text/css" href="css.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">

<style type="text/css">
	#form1{
  		border: 2px solid black;
  		height: 100%;
  		width: 800px;
  		padding:10px;
  		
}
#form1:hover{
	box-shadow: 1px 2px 10px grey;
}

#form2{
  		border: 2px solid black;
  		height: 570px;
  		width: 600px;
  		/*margin-top: 70px;
  		margin-left: 570px;*/
}

#myBtn{
	background-color: #EDA217;
	color: white;
	height: 30px;

	width:90%;

	border: 1px solid black;
}
#myBtn:hover{
		box-shadow: 1px 2px 10px grey;
	background-color: #ED8517;
}

#myBtn1{
	background-color: #EDA217;
	color: white;
	height: 30px;

	width:90%;

	border: 1px solid black;
}
#myBtn1:hover{
		box-shadow: 1px 2px 10px grey;
	background-color: #ED8517;
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
<center>

	<form target='' id="form1" method="POST" enctype="multipart/form-data"><!-- action="admissionForm.php" -->
	<table cellpadding="10" width="750px">
	  <tr>
	 <td colspan="4" align="center">शाळेत दाखल करण्याचा नमुना</td>
	 </tr>
	  
	    <tr>
	    <td>पुर्णनाव : </td>
	    <td><input type="text" name="fullname" id="fullname1" required></td>
	    <td>आईचे नाव :</td>
	    <td><input type="text" name="mothername" id="mothername1" required></td>
	    </tr>
<tr>
	<td>वडिलांचे नाव : </td>
	<td><input type="text" name="dad" id="dad" required></td>
	<td>बँक पास बुक नं :</td>
	<td><input type="text" name="bank" id="bank" required></td>
</tr>
		
		<tr>
	   		<td>चालू  इयत्ता :</td>
	    	<td>
<select id="current" name="currentstd" required>
		<option value="">- Select Standard -</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>	
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>	
	</select>
</td>
	    	<td>हजेरी क्रमांक :</td>
	    	<td><input type="text" name="rollno" id="rollno" required></td>
	    	</tr>
	   	<tr>
	   		<td>मागासवर्गीय असल्याचा तपशील :</td>
	   		<td colspan="3"><input type="text" style="width: 100%;" name="magas" id="magas" required></td>
	   	</tr>
	   	<tr>
			<td>जन्मतारीख :</td>
			<td><input type="date" name="dob" placeholder="dd/mm/yyyy" id="dob" required></td>
		
	      	<td>जन्मस्थळ  : </td>
	    	<td><input type="text" name="dobplace"  id="dobplace" required></td>
	    </tr>
	 
	   <tr>
	      	<td>राष्ट्रीयत्व  :</td>
	    	<td><input type="text" name="nationality" id="nationality" style="width: 100%;" required></td>
	    	<td>लिंग :</td>
	    	<td><input type="radio" name="gender" id="m" value="male" required> मुलगा&nbsp;&nbsp;<input type="radio" name="gender" id="f" value="female" required>मुलगी</td>
	    </tr>
	   <tr>
	      	<td>तालुका :</td>
	    	<td><input type="text" name="taluka" id="taluka" required></td>
	      	<td>जिल्हा :</td>
	    	<td><input type="text" name="district" id="district" required></td>
	    </tr>
	    <tr>
	      	<td>कायमचा पत्ता :&nbsp;&nbsp;</td>
	    	<td colspan="3"><input type="text" name="address" id="address" style="width: 100%;" required ></td>
	    </tr>
	     <tr>
	      	<td>मोबाईल नंबर :</td>
	    	<td><input type="text" name="phone" minlength="10" maxlength="10" id="phone" required></td>
	    	<td>विद्यार्थ्यांचे आधार कार्ड नं :</td>
	    	<td><input type="text" name="aadhar" minlength="12" maxlength="12" id="aadhar" required></td>
	    </tr>
	    <tr>
	    	<td colspan="2"><input type="text" value=""  id="dateTxt" style="width:100%;" name="todate" required/></td>
	    	<td colspan="2"><input type="button" onclick="myDate()" style="width: 100%;" value="आजची तारीख"></td>

	    </td>
	    </tr>

	    <tr>
	    <td>जात व पोटजात : </td>
	    <td><input type="text" name="caste" id="caste" required></td>
	   	<td>धर्म : </td>
	   	<td><input type="text" name="dharma" id="dharma" required></td>

	    </tr>

	   <tr>
	    	<td>आधार कार्ड :</td>
	    	<td colspan="3"><input type="file" name="myfile1" style="width: 100%;" required></td>
	    	
	    </tr>
	    <tr>
	    	<td>जन्म दाखला :</td>
	    	<td colspan="3"><input type="file" name="myfile2" style="width: 100%;" required></td>
	    	
	    </tr>
	    <tr>
	    	<td>रेशन कार्ड :</td>
	    	<td colspan="3"><input type="file" name="myfile3" style="width: 100%;" required></td>
	    	
	    </tr>
	    <tr>
	    	<td>बँकेचे पास बुक :</td>
	    	<td colspan="3"><input type="file" name="myfile4" style="width: 100%;" required></td>
	    	
	    </tr>
	</table>
<center>
	<br>
		<input type="submit"  value="सबमिट करा " id="myBtn" name="btnSub1" /><br><br>
		<input type="button"  value="रीसेट करा" id="myBtn1" onclick="reset()" /><br><br>
	</form></center>


</center>

<script>

function reset(){

	document.getElementById("fullname").value="";
	document.getElementById("mothername").value="";
	document.getElementById("dad").value="";
	document.getElementById("currentstd").value="";
	document.getElementById("caste").value="";
	document.getElementById("dob").value="";
	document.getElementById("dobplace").value="";
	document.getElementById("nationality").value="";
	document.getElementById("taluka").value="";
	document.getElementById("district").value="";
	document.getElementById("address").value="";
	document.getElementById("phone").value="";
	document.getElementById("aadhar").value="";
	document.getElementById("magas").value="";
	document.getElementById("dateTxt").value="";
	document.getElementById("dharma").value="";
	  document.getElementById("m").checked = false;
  document.getElementById("f").checked = false;
document.getElementById("dateTxt").disabled = false;

var dropDown = document.getElementById("current");  
        dropDown.selectedIndex = 0;  
return;
}
</script>
<script type="text/javascript">
function myDate(){

	today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //As January is 0.
var yyyy = today.getFullYear();

var d = dd+"/"+mm+"/"+yyyy;
document.getElementById("dateTxt").value=d;
//document.getElementById("dateTxt").disabled = true;
return;
}
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
  document.write('abhishek');
}
span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<br>
<br>
<br>
<br>
<br>
<br>
<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved.</small></center><br>
</footer>

	</body>
	</html>

	<?php

	if(isset($_POST['btnSub1'])){
	$fullname=$_POST['fullname'];
	$mothername=$_POST['mothername'];
	$dad=$_POST['dad'];
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
	$dharma=$_POST['dharma'];
	$roll=$_POST['rollno'];
	$bank=$_POST['bank'];
	$yr="20".date("y");
	$reg="20".date("y")."".$_POST['currentstd']."".$_POST['rollno'];
	$magas=$_POST['magas'];

/*
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "uba";
*/
	    try{  
      	$dbh=new PDO("mysql:host=localhost;dbname=uba;charset=UTF8","root","");
        $name1=$_FILES['myfile1']['name'];
		$type1=$_FILES['myfile1']['type'];
		$file_size1 =$_FILES['myfile1']['size'];

		 
        $name2=$_FILES['myfile2']['name'];
		$type2=$_FILES['myfile2']['type'];
		$file_size2 =$_FILES['myfile2']['size'];

		
 
        $name3=$_FILES['myfile3']['name'];
		$type3=$_FILES['myfile3']['type'];
		$file_size3 =$_FILES['myfile3']['size'];


		$name4=$_FILES['myfile4']['name'];
		$type4=$_FILES['myfile4']['type'];
		$file_size4 =$_FILES['myfile4']['size'];

		if($file_size1>65535 ||$file_size2>65535 ||$file_size3>65535||$file_size4>65535){
			echo "<script>alert('File size must be less than 63 kB');</script>";

		}else{
		$data1=file_get_contents($_FILES['myfile1']['tmp_name']);
       	$data2=file_get_contents($_FILES['myfile2']['tmp_name']);
       	$data3=file_get_contents($_FILES['myfile3']['tmp_name']);
       	$data4=file_get_contents($_FILES['myfile4']['tmp_name']);


		$stmt=$dbh->prepare("insert into std".$std." values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bindParam(1,$reg);
		$stmt->bindParam(2,$fullname);
		$stmt->bindParam(3,$mothername);
		$stmt->bindParam(4,$dad);
		$stmt->bindParam(5,$std);
		$stmt->bindParam(6,$caste);
		$stmt->bindParam(7,$dob);
		$stmt->bindParam(8,$dobplace);
		$stmt->bindParam(9,$nationality);
		$stmt->bindParam(10,$gender);
		$stmt->bindParam(11,$taluka);
		$stmt->bindParam(12,$district);
		$stmt->bindParam(13,$address);
		$stmt->bindParam(14,$phone);
		$stmt->bindParam(15,$aadhar);
		$stmt->bindParam(16,$bank);

		$stmt->bindParam(17,$dt);
		$stmt->bindParam(18,$yr);
		$stmt->bindParam(19,$roll);
		$stmt->bindParam(20,$magas);
		$stmt->bindParam(21,$dharma);
		$stmt->bindParam(22,$std);
		$stmt->bindParam(23,$name1);
		$stmt->bindParam(24,$type1);
		$stmt->bindParam(25,$data1);

		$stmt->bindParam(26,$name2);
		$stmt->bindParam(27,$type2);
		$stmt->bindParam(28,$data2);

		$stmt->bindParam(29,$name3);
		$stmt->bindParam(30,$type3);
		$stmt->bindParam(31,$data3);

		$stmt->bindParam(32,$name4);
		$stmt->bindParam(33,$type4);
		$stmt->bindParam(34,$data4);



		$stmt->execute();  
		echo "<script>

<!--function reset(){

	document.getElementById('fullname').value='';
	document.getElementById('mothername').value='';
	document.getElementById('dad').value='';
	document.getElementById('currentstd').value='';
	document.getElementById('caste').value='';
	document.getElementById('dob').value='';
	document.getElementById('dobplace').value='';
	document.getElementById('nationality').value='';
	document.getElementById('taluka').value='';
	document.getElementById('district').value='';
	document.getElementById('address').value='';
	document.getElementById('phone').value='';
	document.getElementById('aadhar').value='';
	document.getElementById('magas').value='';
	document.getElementById('dateTxt').value='';
	document.getElementById('dharma').value='';
	  document.getElementById('m').checked = false;
  document.getElementById('f').checked = false;
document.getElementById('dateTxt').disabled = false;

var dropDown = document.getElementById('current');  
        dropDown.selectedIndex = 0;  
return;
}
-->
reset();
</script>";
		echo "<script>alert('Student register successfully!!!');</script>";

	}
    } catch(Exception $e){  
    	Echo "Connection failed" . $e->getMessage();  
    }  

/*

$conn = new mysqli($servername, $username, $password, $dbname);

mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$sql = "INSERT INTO std".$std."(`reg`, `fullname`, `mothername`, `dad`, `standard`, `caste`, `birthdate`, `birthplace`, `nationality`, `gender`, `taluka`, `district`, `address`, `phone`, `aadhar`, `admsdate`, `admsyear`, `rollno`, `magas`, `dharma`, `cstd`) VALUES ('".$reg."','".$fullname."','".$mothername."','".$dad."','".$std."','".$caste."','".$dob."','".$dobplace."','".$nationality."','".$gender."','".$taluka."','".$district."','".$address."','".$phone."','".$aadhar."','".$dt."','".$yr."','".$roll."','".$magas."','".$dharma."','".$std."')";
		if ($conn->query($sql) === TRUE) {
  		
			echo "<script>alert('Student Registered successfully!!!'); </script>";
			
		} else {
    		echo "<script> alert('$conn->error'); </script>";
		}
	}
$conn->close();
*/
}
?>