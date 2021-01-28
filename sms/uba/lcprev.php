<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "uba";

 	$regno=$_POST['reg'];
    $aadharno=$_POST['aadhar'];
    $rno=$_POST['rno'];
    $std=$_POST['std'];

    $id=$_POST['id'];
    $prevschl=$_POST['prevschl'];
    $behaviour=$_POST['behaviour'];
    $reason=$_POST['reason'];
    $remark=$_POST['remark'];
    $pragati=$_POST['pragati'];
    $leavingdate=$_POST['leavingdate'];
    $roll="-------------";
    $fullname="-------------";
    $mothername="-------------";
    $standard="-------------";
    $caste="-------------";
    $magas="-------------";
    $dob="-------------";
    $dobplace="-------------";
    $taluka="-------------";
    $district="-------------";
    $nationality="-------------";
    $aadhar="-------------";
    $phone="-------------";
    $address="-------------";
    $admsdate="-------------";
    $admsyear="-------------";
    $dad="-------------";
    $register="-------------";
    $gen="-------------";
    $dharma="-------------";
    $cstd="--------------";

?>
<!DOCTYPE html>
<html>
<head>
	<title>LEAVING CERTIFICATE</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<style type="text/css">
		   #f1{
  		border:1px solid black;
        width: 700px;
    }
    #f2{
  border:1px solid black;
        width: 800px;
        box-shadow: 3px 5px 10px grey;
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

<?php
 $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
mysqli_set_charset($conn,'utf8');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($std=="1"||$std=="2"||$std=="3"||$std=="4"||$std=="5"||$std=="6"||$std=="7"){
	$sql="INSERT INTO exist_student (reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data) select reg,fullname,mothername,dad,standard,caste,birthdate,birthplace,nationality,gender,taluka,district,address,phone,aadhar,bank,admsdate,admsyear,rollno,magas,dharma,cstd,aadhar_name,aadhar_type,aadhar_data,birth_name,birth_type,birth_data,cert_name,cert_type,cert_data,bank_name,bank_type,bank_data from std".$std;
	$conn->query($sql);
	$sql="DELETE FROM std".$std." WHERE reg='".$regno."' AND aadhar='".$aadharno."' AND rollno='".$rno."'";
	$conn->query($sql);
	$sql = "SELECT * FROM exist_student";
}else{
	$sql = "SELECT * FROM exist_student";
}
//echo  $sql;
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        if($row['reg']==$regno&&$row['aadhar']==$aadharno&&$row['rollno']==$rno){
    $roll=$row['rollno'];
    $fullname=$row['fullname'];
    $mothername=$row['mothername'];
    $standard=$row['standard'];
    $caste=$row['caste'];
    $magas=$row['magas'];
    $dob=$row['birthdate'];
    $dobplace=$row['birthplace'];
    $nationality=$row['nationality'];
    $taluka=$row['taluka'];
    $district=$row['district'];
    $address=$row['address'];
    $phone=$row['phone'];
    $aadhar=$row['aadhar'];
    $admsdate=$row['admsdate'];
    $admsyear=$row['admsyear'];
    $dad=$row['dad'];
    $register=$row['reg'];
     $gen=$row['gender'];
     $dharma=$row['dharma'];
     $cstd=$row['cstd'];

break;
        }
    }

}else {
    echo "<script>alert('Not Found!!');</script>";
}
$conn->close();
?>



<center>
    <form id="f2" >

    	<div id="printMe">
    <form id="f1" >
<br>
<table border="1" cellpadding="7" width="750px"> <!--border="1">-->
	<tr>
		<td colspan="6" align="center"><font style="font-size: 35px;color: #900C3F;"><b>शाळा सोडल्याचे प्रमाणपत्र </b><br></font></td>
	</tr>

    		<tr>
    			<td>स्टुडेंट आय डी : </td>
                <td><b><?php echo $id; ?></b></td>
    			<td colspan="2">आधार कार्ड क्रमांक : </td>
    			<td colspan="2" align="left"><b><?php echo $aadhar; ?></b></td>
    		</tr>
    		<tr>
    			<td>विद्यार्थ्यांचे नाव : </td><td colspan="5" align="left"><b><?php echo $fullname; ?></b></td>
    		</tr>
    		<tr>
    			<td>वडिलांचे नाव : </td><td colspan="2" align="left"><b><?php echo $dad; ?></b></td>
    			<td>आईचे नाव : </td><td colspan="2" align="left"><b><?php echo $mothername;  ?></b></td>
    		</tr>
    		<tr>
    			<td>मातृभाषा : </td>
    			<td colspan="2" align="left"><b><?php echo "मराठी"; ?></b></td>
    			<td>राष्ट्रीयत्व : </td>
    			<td colspan="2"><b><?php echo $nationality; ?></b></td>
        
    		</tr>
   			 <tr>
    			<td>धर्म : </td><td colspan="2"><b><?php echo $dharma;  ?></b></td>
        		<td>जात व पोटजात :</td><td colspan="2"><b><?php echo $caste; ?></b></td>
       
    		</tr>
    		<tr>
    			<td>जन्म स्थळ(गाव/शहर) :</td><td><b><?php echo $dobplace; ?></b></td>
         		<td align="right">तालुका : </td><td><b><?php echo $taluka; ?></b></td>
         		<td align="right">जिल्हा : </td><td><b><?php echo $district; ?></b></td>
         	</tr>
         	<tr>
         <td>राज्य :</td><td colspan="2"><b>MAHARASHTRA</b></td>
         <td>देश : </td><td colspan="2"><b>INDIA</b></td>
    		</tr>
    		<tr>
    			<td>जन्मदिनांक :</td><td><b><?php echo $dob; ?></b></td>
    			<td>जन्म दिनांक अक्षरी :</td><td colspan="3"><b>----------------</b></td>
    		</tr>
    		<tr> 
    			<td>यापूवींची शाळा व इयत्ता : </td><td colspan="5"><b><?php echo $prevschl; ?></b></td>
    		</tr>
    		<tr>
                <td colspan="3">या शाळेत प्रवेश घेतल्याचा दिनांक : <b><?php echo $admsdate; ?></b></td>
        
                <td colspan="3">प्रवेश इयत्ता : <b><?php echo $standard; ?></b></td>
            </tr> 
    
    			<tr>
                	<td>अभ्यासातील प्रगती : </td><td colspan="5"><b><?php echo $pragati; ?></b></td>
        		</tr>
        		<tr>
                	<td>वर्तणूक : </td><td colspan="5"><b><?php echo $behaviour; ?></b></td>
            </tr> 
     
        <tr>
        	<td colspan="6">शाळा सोडल्याचा दिनांक : <b><?php echo $leavingdate; ?></b></td>
        </tr>
    
    <tr>
        <td colspan="2">कोणत्या इयत्तेत शिकत होता :</td><td colspan="4"><b><?php echo $cstd; ?></b></td>
    </tr>
    <tr>
        <td colspan="2">व केव्हापासून (अक्षरी व अंकी) : </td><td colspan="4"><b><?php echo $standard; ?></b></td>
    
    </tr>
    <tr>
    	<td colspan="6">शाळा सोडल्याचे कारण : <b><?php  echo $reason; ?></b></td>
    </tr>

    <tr>
    			<td>शेरा : </td><td colspan="5"><b><?php echo $remark; ?></b></td>
    		</tr>
    	</table>

   </form>
   <br>
    <table border="0" width="730px">
    	<tr>
    		<td colspan="9" align="center">दाखला देण्यात येतो की , वरील माहिती शाळेतील जनरल रजिस्टर नं. <b><?php echo $register; ?></b> प्रमाणे आहे.</td>
    	</tr>
    	 <tr><td colspan="9">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
    	<tr>
    		<td colspan="3" align="center">तारीख - </td><td colspan="3" align="right">माहे - </td><td colspan="3" align="center">सन - </td>
    	</tr>

    	<tr><td colspan="9">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
    	<tr>
    		<td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td>
    		<td align="center" colspan="3">सही</td>
 
    	</tr>
    	<tr><td colspan="9">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
    	<tr>
    		<td colspan="3" align="center">वर्गशिक्षक</td>
    		<td colspan="3" align="center">लेखनिक</td>
    		<td colspan="3" align="center">मुख्याध्यापक/प्राचार्य<br>(शिक्का)</td>

    	</tr>
        <tr>
            <td colspan="9">&nbsp;</td>
        </tr>
    </table>
 
        </div></form>
        <br>
			<button onclick="printElem('printMe')" id="btnPrint">PRINT</button>
    	</center>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
    		
function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

mywindow.document.write('<html><head><title>LEAVING CERTIFICATE</title>');
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