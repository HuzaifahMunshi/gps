<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
?>  
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css">
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

#f1{
    border: 2px solid black;
    box-shadow: 3px 5px 10px grey;
    height: 600px;
    width:750px;
}
</style>
</head>
<body bgcolor="#fff">

<?php

$reg=$_POST['reg'];
$aadhar=$_POST['aadhar'];
$std=$_POST['std'];
$rno=$_POST['rno'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uba";
$inw=$_POST['birth'];

if(isset($_POST['btnSub'])){
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($std=="1"||$std=="2"||$std=="3"||$std=="4"||$std=="5"||$std=="6"||$std=="7"){
    $sql = "SELECT * FROM std".$std;
}else{
     $sql = "SELECT * FROM exist_student";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['reg']==$reg&&$row['aadhar']==$aadhar&&$row['rollno']==$rno){
             $t3=$row['rollno'];
    $name=$row['fullname'];
    $std=$row['standard'];
    $cstd=$row['cstd'];
    $caste=$row['caste'];
    $dobplace=$row['birthplace'];
    $dob=$row['birthdate'];
    $admsyear=$row['admsyear'];
    $gen=$row['gender'];
    /*
    $t10=$row['magas'];
    
    $t11=$row['nationality'];
    $t15=$row['taluka'];
    $t16=$row['district'];
    $t18=$row['address'];
    $t17=$row['phone'];
    $t7=$row['aadhar'];
    $t5=$row['admsdate'];

    $dad=$row['dad'];
    $t4="20".date("y")."".$t19."".$t3;
     $gen=$row['gender'];
     $dharma=$row['dharma'];
*/
     break;
        }
    }
    if($row['reg']!=$reg || $row['aadhar']!=$aadhar){
    echo "<script>alert('Not Found!!');</script>";
    header("location: bonafide.php");
}
}else {
    echo "";
}
$conn->close();
}

?>
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

<div id="printMe">
<form id="f1">
    <br><br>

<table border="0" width="670px">
	<tr>
		<td colspan="4" align="center"><font style="font-size: 30px;"><b>बोनाफाईड प्रमाणपत्र</b></font><br><hr></td>

	</tr>
    		<tr>
    			<td colspan="2" align="left">जा .क्र .</td>
    			<td colspan="2" align="right">दिनांक :<?php echo "<b>" . date("d/m/y") . "</b>"; ?></td>

    		</tr>
    		<tr>
    			<td colspan="4" align="left">दाखला देण्यात येतो की ,</td>
    			

    		</tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		
    		<tr>
    			<td colspan="4">
    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
            if($gen=="male"){
                echo "कुमार ";
            }else{
                echo "कुमारी ";
            } 
             ?>
                <?php echo "<b>$name</b>"; ?> 
                <?php
            if($gen=="male"){
                echo "हा ";
            }else{
                echo "ही ";
            } 
             ?>
                  आमच्या शाळेत इयत्ता  <?php echo "<b>$std</b>"; ?>  वी  मध्ये शिकत आहे /
                 
                <?php
            if($gen=="male"){
                echo "होता ";
            }else{
                echo "होती ";
            } 
             ?>. शाळेच्या दप्तरी नोंदीप्रमाणे रजि . नं . <?php echo " <b>$reg</b> "; ?>नुसार<?php
            if($gen=="male"){
                echo " याची ";
            }else{
                echo " हिची ";
            } 
             ?> जन्मतारीख  <?php echo "<b>$dob ( $inw )</b>"; ?>
		
					अशी असून जात  <?php echo "<b>$caste</b>"; ?>  तसेच जन्मस्थळ  <?php echo "<b>$dobplace</b>"; ?>  आहे .
                    <?php
            if($gen=="male"){
                echo " तो ";
            }else{
                echo " ती ";
            } 
             ?> माझ्या चांगल्या
              <?php
            if($gen=="male"){
                echo " परिचयाचा ";
            }else{
                echo " परिचयाची ";
            } 
             ?> असून  <?php
            if($gen=="male"){
                echo " त्याची ";
            }else{
                echo " तिची ";
            } 
             ?>
              वर्तणूक चांगली आहे .
				
                <br>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;सदर विद्यार्थ्याने शैक्षणिक वर्ष <?php echo "<b>$admsyear</b>"; ?>  ते  <?php echo "<b>".date("Y")."</b>"; ?> दरम्यान इयत्ता <?php echo "<b>$std</b>"; ?>  वी ते <?php echo "<b>$cstd</b>"; ?>  वी पर्यंत शिक्षण घेतले आहे . 
				</td>
			</tr>
			<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		<tr><td colspan="4">&nbsp;&nbsp; </td></tr>
    		
			<tr>
				<td colspan="2" align="left">
					तारीख : <?php  echo "<b>__/__/_____</b>"; ?>
				</td>
				<td colspan="2" align="right">
					मुख्याध्यापक
				</td>
			</tr>

		
    	</table>
    </form>
    </div>
    <br><br><br><br>
<button onclick="printElem('printMe')" id="btnPrint">PRINT</button>
    	</center>


    	<script>
    		
function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>BONAFIDE CERTIFICATE</title>');
    mywindow.document.write('</head><body >');
    mywindow.document.write(content);
    mywindow.document.write('</body></html>');

    mywindow.document.close();
    mywindow.focus()
    mywindow.print();
    mywindow.close();
    return true;
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