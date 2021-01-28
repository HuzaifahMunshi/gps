
<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "uba";
    $regno=$_GET['regno'];
    $aadharno=$_GET['aadharno'];
    $rno=$_GET['rno'];
    $std1=$_GET['currentstd'];
$std=$_GET['std'];
    $t2="----------------";
    $t3="----------------";
    $t4="----------------";
    $t5="----------------";
    $t6="----------------";
    $t7="----------------";
    $t8="----------------";
    $t9="----------------";
    $t10="----------------";
    $t11="----------------";
    $t12="----------------";
    $t13="----------------";
    $t14="----------------";
    $t15="----------------";
    $t16="----------------";
    $t17="----------------";
    $t18="----------------";
    $dharma="----------------";
    
   $dad="-----------------";
    $t1="जिल्हा परिषद पूर्ण प्राथमिक शाळा<br> मुंढे तर्फे सावर्डे";
   
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
        if($row['reg']==$regno&&$row['aadhar']==$aadharno&&$row['rollno']==$rno){
             $t3=$row['rollno'];
    $t6=$row['fullname'];
    $t8=$row['mothername'];
    $t19=$row['standard'];
    $t9=$row['caste'];
    $t10=$row['magas'];
    $t12=$row['birthdate'];
    $t14=$row['birthplace'];
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
break;
        }
    }
    if($row['reg']!=$regno || $row['aadhar']!=$aadharno){
    echo "<script>alert('Not Found!!');</script>";
    header("location: view.php");
}
}else {
    echo "";
}
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css">
    #f1{
        box-shadow: 3px 5px 10px grey;
        border:1px solid black;
        width: 800px;
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

            #head1{
    font-size: 35px;
    font-family: cursive;
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





<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<center>
    <form id="f1"><div id="printMe">
<table border="0" width="750px" cellpadding="5"> <!--border="1">-->
	<tr>
        <td colspan="2">
            <img src="sarswati.jpg" height="140px" width="138px"/>
        </td>
		<td colspan="4" align="center"><font style="font-size: 40px;color: #C24F1A;"><?php echo $t1; ?></font></td>
<tr><td colspan="6"><b><hr/></b></td>
    </tr>
    
    </tr>

    		<tr>
    			
                <td>&nbsp;&nbsp;&nbsp;&nbsp;हजेरी क्र. :</td>
                <td colspan="2"><b><font style="font-size: 17px;"><?php echo $t3;  ?></font></b></td>
                <td align="right">&nbsp;&nbsp;&nbsp;&nbsp;प्रवेश इयत्ता : </td>
                <td colspan="2"><b><font style="font-size: 17px;"><?php echo $t19;  ?></font></b></td>
    		</tr>
            <tr>
    			<td>&nbsp;&nbsp;&nbsp;&nbsp;रजिस्टर नंबर : </td><td colspan="2"><b><font style="font-size: 17px;"><?php echo $t4;  ?></font></b></td>
    			<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;दाखिल दिनांक : </td><td colspan="2"><b><font style="font-size: 17px;"><?php echo $t5;  ?></font></b></td>

    		</tr>
    		<tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;१) विद्यार्थ्याचा पूर्णं नाव : <b><font style="font-size: 17px;"><?php echo $t6;  ?></font></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;२) विद्यार्थ्याचा आधार कार्ड क्रमांक : <b><font style="font-size: 17px;"><?php echo $t7;  ?></font></b></td>
    		</tr>
    <tr>
                <td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;३) आईचे नाव : <b><font style="font-size: 17px;"><?php echo $t8;  ?></font></b></td>
            </tr>
             <tr>
                <td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;४) वडिलांचे नाव : <b><font style="font-size: 17px;"><?php echo $dad;  ?></font></b></td>
            </tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;५) धर्म व जात : <b><font style="font-size: 17px;"><?php echo $dharma." ".$t9;  ?></font></b></td>
    		</tr>
    <tr> 
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;६) मागासवगींय असल्यास तपशील : <b><font style="font-size: 17px;"><?php echo $t10;  ?></font></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;७) राष्ट्रीयत्व : <b><font style="font-size: 17px;"><?php echo $t11;  ?></font></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;८) जन्म दिनांक (अंकी) : <b><font style="font-size: 17px;"><?php echo $t12;  ?></font></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;९) जन्म दिनांक (अक्षरी) : <b><font style="font-size: 17px;"><?php echo $t13;  ?></font></b></td>
    		</tr>
    <tr> 
    			<td>&nbsp;&nbsp;&nbsp;&nbsp;१०) जन्म स्थळ : </td><td><b><font style="font-size: 17px;"><?php echo $t14;  ?></font></b></td>
                <td align="right">तालुका : </td><td><b><font style="font-size: 17px;"><?php echo $t15;  ?></font></b></td>
                <td align="right">जिल्हा : </td><td><b><font style="font-size: 17px;"><?php echo $t16;  ?></font></b></td>
    		</tr>
             <tr>
                <td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;११) मोबाईल नंबर : <b><font style="font-size: 17px;"><?php echo $t17;  ?></font></b></td>
            </tr> 
        <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;१२) कायमचा पत्ता : <b><font style="font-size: 17px;"><?php echo $t18;  ?></font></b></td></tr>

    <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

    <tr>
    			<td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; मी यावरुन दाखला देतो की, माझ्या देखरेखेखालील माझ्या<?php
                    if($gen=="male"){
                        echo " मुला ";
                    }else if($gen=="female"){
                        echo " मुली ";
                    }else{
                        echo "मुलगा / मुलगी / पाल्य ";  
                    }
                      ?> संबंधीची वरील माहिती माझ्या उत्तम समजुतीप्रमाणे बिनचूक आहे. </td>
    		</tr>
    
     <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

 
    
    <tr>
    			<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;ठिकाण : <b><font style="font-size: 17px;"><?php echo $t16;  ?></font></b> </td>
                <td align="right">पालकाची सही : </td><td colspan="2">&nbsp;&nbsp;______________________</td>
    		</tr>
    <tr>
    			<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;तारीख : __/__/____</td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

             </tr>
             <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td align="right">वर्गशिक्षकाची सही : </td><td colspan="2">&nbsp;&nbsp;_______________________</td>

    		</tr>
             <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    			<td align="right">मुख्याध्यायपकाची सही : </td><td colspan="2">&nbsp;&nbsp;_______________________</td>
    		</tr>
    
   
 <tr>
    	</table>

    </div>
    <br><br><br>
    </form>

    <br><br><br><br>
<button onclick="printElem('printMe')" id="btnPrint">PRINT</button>
    	</center>


    	<script>
    		
function printElem(divId) {
    var content = document.getElementById(divId).innerHTML;
    var mywindow = window.open('', 'Print', 'height=600,width=800');

    mywindow.document.write('<html><head><title>ADMISSION CERTIFICATE</title>');
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
<br>
<footer><br><center>
        <small> Copyright &copy; 2019 UBA, All Rights Reserved</small></center><br>
</footer>
</body>
</html>
