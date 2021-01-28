
<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
  header("location: index.php");
}else{
	$std=""; 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uba";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>


  <link rel="stylesheet" type="text/css" href="css1.css">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
	table#t1  {
  border-collapse: collapse;
  border-spacing: 0;
 
   
  border: 1px solid #ddd;
}

#btn1{
	background-color: #DD1146;
			color: white;
			height: 40px;
			border:1px solid black;
			border-radius: 10px;
			font-size: 20px;
}
	#btn1:hover{
			border: 2px solid black;
			box-shadow: 2px 2px 2px grey;
		}
tr#t1:nth-child(even){background-color: #f2f2f2}
	#btn{
		background-color: #EC7346;
		color: white;
		border: 1px solid black;
		width:70px;
		font-size: 17px;
box-shadow: 3px 2px 4px black;
		height: 40px;
		transition: 0.1s ease;
		}
		#btn:hover{
			background-color: #F1541A;
			
		box-shadow: 2px 1px 3px grey;	
		}
		#current{
		
			height: 40px;
			
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

<center>
	<form action="view.php" method="POST" >
<select id="current" name="currentstd" required>
		<option value="">Select Standard</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>	
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">उत्तीर्ण विद्यार्थी</option>	
	</select>
	&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" name="btnShow" id="btn" value="VIEW">
</form>
<br><br>
	<table cellpadding="10" border="3">

		<tr>
			<td align="center-top" colspan="2">
		<div style="overflow-y: auto;overflow-x: scroll; height: 500px;width:1450px;">
<table border="1" cellpadding="5" id="t1">
  <tr>
      <th>रजि. नं. </th>
       <th>आधार कार्ड  न.</th>
         <th>हजेरी क्र .</th>
    <th>पूर्ण नाव </th>
      <th>आईचे नाव </th>
      <th>वडिलांचे नाव</th>
      <th>प्रवेश इयत्ता</th>
      <th>इयत्ता</th>
      <th>बँक पासबुक नं</th>
      <th>जात</th>
      <th>जन्मदिनांक</th>
      <th>जन्मस्थान</th>
      <th>राष्ट्रीयत्व</th>
      <th>लिंग</th>
      <th>तालुका </th>
    <th>जिल्हा</th>
      <th>पत्ता</th>
      <th>फोन न.</th>
    
      <th>प्रवेश तारीख</th>
      <th>प्रवेश वर्ष</th>
    
      <th>मागासवर्गीय तपशील </th>
      <th>धर्म</th>
        <th>आधार कार्ड</th>
      <th>जन्म दाखला</th>
      <th>रेशन कार्ड</th>
      <th>बँकेचे पास बुक</th>
      <th>ऍडमिशन फॉर्म</th>

  </tr>
  



<?php

if(isset($_POST['btnShow'])){

$std=$_POST['currentstd'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($std=="1"||$std=="2"||$std=="3"||$std=="4"||$std=="5"||$std=="6"||$std=="7"){
	$sql = "SELECT * FROM std".$std;
	$p=$std;
}else{
	$p="exist_student";
	$sql = "SELECT * FROM exist_student";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr id='t1'><td>".$row['reg']."</td><td>".$row['aadhar']."</td><td>".$row['rollno']."</td><td>".$row['fullname']."</td><td>".$row['mothername']."</td><td>".$row['dad']."</td><td>".$row['standard']."</td><td>".$row['cstd']."</td><td>".$row['bank']."</td><td>".$row['caste']."</td><td>".$row['birthdate']."</td><td>".$row['birthplace']."</td><td>".$row['nationality']."</td><td>".$row['gender']."</td><td>".$row['taluka']."</td><td>".$row['district']."</td><td>".$row['address']."</td><td>".$row['phone']."</td><td>".$row['admsdate']."</td><td>".$row['admsyear']."</td><td>".$row['magas']."</td><td>".$row['dharma']."</td><td><a target='_blank' href='viewDoc1.php?id=".$row['reg']."&stnd=".$p."'>".$row['aadhar_name']."</a></td><td><a target='_blank' href='viewDoc2.php?id=".$row['reg']."&stnd=".$p."'>".$row['birth_name']."</a></td><td><a target='_blank' href='viewDoc3.php?id=".$row['reg']."&stnd=".$p."'>".$row['cert_name']."</a></td><td><a target='_blank' href='viewDoc4.php?id=".$row['reg']."&stnd=".$p."'>".$row['bank_name']."</a></td><td><a target='' href='admissionprev.php?regno=".$row['reg']."&aadharno=".$row['aadhar']."&rno=".$row['rollno']."&currentstd=".$row['cstd']."&std=".$std."'>VIEW-FORM</a></td></tr>";
   //     echo "name: " . $row["fullname"]."<br>";
    }
    echo "</tr>";
} else {
    echo "<script> alert('Empty table!!!'); </script>";
}
$conn->close();
}
?>
</table>
</div>
</td>
</tr>
</table>


<br>
<br>
<table cellpadding="20" border="3" width="98%">
	<tr>
		<td align="center">
			<form action="update.php" method="POST">
		<table cellpadding="15" width="400px">
			<tr>
				<td colspan="2" align="center"><font style="font-size: 20px;"><b>विद्यार्थ्यांचे तपशील अद्यावत करा (UPDATE)</b></font></td>
			</tr>
			<tr>
			<td>रजि नं.: </td><td><input type="text" style="width: 100%;" name="regnoupdate" placeholder="Enter Register No..." required /></td>

		</tr>
		<tr>
			<td>आधार न.: </td><td><input type="text" style="width: 100%;" name="aadharnoupdate" placeholder="Enter Aadhar No..." required /></td>
		</tr>
		<tr>
			<td>हजेरी क्र.: </td><td><input type="text" style="width: 100%;" name="rnoupdate" placeholder="Enter Roll No..." required /></td>
		</tr>

		<tr>

		<td>

<select name="stdupdate" id="current" style="width: 100%;" required>
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
		<td>
			<select name="field" id="current" style="width: 100%;"  required>
 		<option value="">-- Select Field --</option>
		<option value="पूर्ण नाव">पूर्ण नाव</option>
		<option value="आईचे नाव">आईचे नाव</option>
		<option value="वडिलांचे नाव">वडिलांचे नाव</option>
		<option value="जात">जात</option>	
		<option value="जन्मदिनांक">जन्मदिनांक</option>
		<option value="जन्मस्थान">जन्मस्थान</option>
		<option value="राष्ट्रीयत्व">राष्ट्रीयत्व</option>
		<option value="लिंग">लिंग</option>
		<option value="तालुका">तालुका</option>
		<option value="जिल्हा">जिल्हा</option>
		<option value="पत्ता">पत्ता</option>
		<option value="फोन न.">फोन न.</option>
		<option value="आधार">आधार</option>	
		<option value="मागासवर्गीय तपशील">मागासवर्गीय तपशील</option>
		<option value="धर्म">धर्म</option>
		<option value="हजेरी क्र.">हजेरी क्र.</option>
		<option value="बँक पास बुक नं">बँक पास बुक नं</option>


</select>
			
		</td>
		</tr>
		<tr>
			<td colspan="2"><input type="text" placeholder="Enter Updated Data..." name="dataupdate" style="width: 100%;border: 1px solid black;" required /></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" style="width: 100%;" id="btn1" value="UPDATE" name="btnUpdate"/>
			</td>
		</tr>
		</table>
	</form>
</td>

<td align="center">
	<!-- Second table    -->
<form action="delete.php" method="POST">
		<table cellpadding="15" width="400px">
			<tr>
				<td colspan="2" align="center"><font style="font-size: 20px;"><b>विद्यार्थ्यांचे तपशील हटवा (DELETE)</b></font></td>
			</tr>
			<tr>
			<td>रजि. नं.: </td><td><input type="text" style="width: 100%;" name="regdel" placeholder="Enter Register No..." required /></td>

		</tr>
		<tr>
			<td>आधार न.: </td><td><input type="text" style="width: 100%;" name="aadhardel" placeholder="Enter Aadhar No..." required /></td>
		</tr>
		<tr>
			<td>हजेरी क्र.: </td><td><input type="text" style="width: 100%;" name="rnodel" placeholder="Enter Roll No..." required /></td>
		</tr>

		<tr>

		<td colspan="2">

		<select name="stddel" id="current" style="width: 100%;" required>
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
		<td colspan="2">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="DELETE" id="btn1" style="width: 100%;" name="btnDelete"></td>
	</tr>
</table>
</form>

</td>
<!---

<td align="center">
	
	<form action="admissionprev.php" method="POST">
	<table cellpadding="15">
		<tr>
			<td align="center" colspan="2">
				<b><font style="font-size: 20px;"> विद्यार्थ्यांची वैयक्तिक माहिती</font></b>
			</td>

		</tr>
		<tr>
			<td>रजि. नं.: </td><td><input type="text" name="regno" placeholder="Enter Register No..." required /></td>

		</tr>
		<tr>
			<td>आधार न.: </td><td><input type="text" name="aadharno" placeholder="Enter Aadhar No..." required /></td>
		</tr>
		<tr>
			<td>हजेरी क्र.: </td><td><input type="text" name="rno" placeholder="Enter Roll No..." required /></td>
		</tr>

		<tr>

			<td colspan="2"><select id="current" style="width: 100%;" name="currentstd" required>
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
				<td colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" name="btnShowStud" id="btn1" style="width: 100%;" value="VIEW" />
			</td>

		</tr>

	</table>
</form>
</td>
-->
</tr>
</table>
</center>
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
<?php
}
?>

