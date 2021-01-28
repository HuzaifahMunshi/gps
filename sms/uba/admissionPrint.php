
<?php
include('login.php'); 
if(!isset($_SESSION['login_user'])){
    header("location: index.php");
}
	
/*	
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
	
	$gen="";
	$t1="जिल्हा परिषद पूर्ण प्राथमिक शाळा<br><br> मुंढे तर्फे सावर्डे";
	$t3=$_POST['rollno'];
	$t6=$_POST['fullname'];
	$t8=$_POST['mothername'];
	$t19=$_POST['currentstd'];
	$t9=$_POST['caste'];
	$t10=$_POST['magas'];
	$t12=$_POST['dob'];
	$t14=$_POST['dobplace'];
	$t11=$_POST['nationality'];
	$t15=$_POST['taluka'];
	$t16=$_POST['district'];
	$t18=$_POST['address'];
	$t17=$_POST['phone'];
	$t7=$_POST['aadhar'];
	$t5=$_POST['todate'];
	$t4="20".date("y")."".$t19."".$t3;


*/	
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Amission Form Printing</title>
<link rel="stylesheet" type="text/css" href="css.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8">

	<style type="text/css">
	#form1{
  		border: 2px solid black;
  		height: 900px;
  		width: 800px;
  		padding:10px;
  		
}
#form1:hover{
	box-shadow: 1px 2px 10px grey;
}
</style>
</head>
<body>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="ccard.php">मुख्य पृष्ठ </a>
  <a href="bonafide.php">बोनाफाईड बनवा </a>
  <a href="logout.php">बाहेर पडा</a>
</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<center>
<form id="form1" method="POST"> 

			<div id="printMe">
<table cellpadding="5" border="0"> <!--border="1">-->
	
		<td colspan="6" align="center"><font style="font-size: 30px;"><b><?php echo "जिल्हा परिषद पूर्ण प्राथमिक शाळा<br><br> मुंढे तर्फे सावर्डे"; ?> </b></font></td>
<tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    </tr>
	
    		<tr>
    			
                <td>&nbsp;&nbsp;&nbsp;&nbsp;हजेरी क्र.: </td>
                <td colspan="2"><b><?php echo $_POST['rollno'];  ?></b></td>
                <td align="right">&nbsp;&nbsp;&nbsp;&nbsp;इयत्ता :</td>
                <td colspan="2"><b><?php echo $_POST['currentstd'];  ?></b></td>
    		</tr>
            <tr>
    			<td>&nbsp;&nbsp;&nbsp;&nbsp;रजिस्टर नंबर : </td><td colspan="2"><b><?php echo "20".date("y")."".$_POST['currentstd']."".$_POST['rollno'];  ?></b></td>
    			<td align="right">&nbsp;&nbsp;&nbsp;&nbsp;दाखिल दिनांक : </td><td colspan="2"><b><?php echo $_POST['todate'];  ?></b></td>

    		</tr>

    		<tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;१) विद्यार्थ्याचा पूर्णं नाव : <b><?php echo $_POST['fullname'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;२) विद्यार्थ्याचा आधार कार्ड क्रमांक : <b><?php echo $_POST['aadhar'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;३) आईचे नाव : <b><?php echo $_POST['mothername'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;४) धर्म व जात : <b><?php echo $_POST['caste'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;५) मागासवर्गीय असल्याचा तपशील : <b><?php echo $_POST['magas'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;६) राष्ट्रीयित्व : <b><?php echo $_POST['nationality'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;७) जन्म दिनांक (अंकी) : <b><?php echo $_POST['dob'];  ?></b></td>
    		</tr>
    <tr>
    			<td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;८) जन्म दिनांक (अक्षरी) : <b><?php echo "-------------------";  ?></b></td>
    		</tr>
    <tr> 
    			<td>&nbsp;&nbsp;&nbsp;&nbsp;९) जन्म स्थळ : </td><td><b><?php echo $_POST['dobplace'];  ?></b></td>
                <td>तालुका : </td><td><b><?php echo $_POST['taluka'];  ?></b></td>
                <td>जिल्हा : </td><td><b><?php echo $_POST['district'];  ?></b></td>
    		</tr>
             <tr>
                <td colspan="6" >&nbsp;&nbsp;&nbsp;&nbsp;१०) मोबाईल नंबर : <b><?php echo $_POST['phone'];  ?></b></td>
            </tr> 
        <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;११) कायमचा पत्ता : <b><?php echo $_POST['aadhar'];  ?></b></td></tr>
    
    
    
    <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
    <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>

    <tr>
    			<td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;मी यावरुन दाखला देतो की, माझ्या देखरेखेखालील माझ्या<?php 
    			
    				$gen=$_POST["gender"];
    			if($_POST['gender']=="male"){
    				echo " मुला ";
    			}else if($_POST['gender']=='female'){
    				echo " मुली ";
    			}else{
    				echo " मुलगा/मुलगी/पाल्य ";

				}
    			 ?> संबंधीची वरील माहिती माझ्या उत्तम समजुतीप्रमाणे बिनचूक आहे. </td>
				
    		</tr>
    
     <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
   
    
    <tr>
    			<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;ठिकाण : <?php echo $_POST['district'];  ?></td>
                <td align="right">पालकाची सही : </td><td colspan="2">______________________</td>
    		</tr>
    <tr>
    			<td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;तारीख : __/__/____</td>
                 <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>

             </tr>
             <tr> <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td align="right">वर्गशिक्षकाची सही : </td><td colspan="2">_______________________</td>

    		</tr>
             <tr><td colspan="6">&nbsp;&nbsp;&nbsp;&nbsp;</td></tr>
            <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
    			<td align="right">मुख्याध्यायपकाची सही : </td><td colspan="2">_______________________</td>
    		</tr>
    
   
 <tr>
    	</table>
    </div>

    <br><br>
<input type="submit" name="btnSub" value="सबमिट करा"><br>

<button onclick="printElem('printMe')" id="btnPrint">PRINT</button>
    </form>

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
		


</body>
</html>

<?php

if(isset($_POST["btnSub"])){

	$gen="";
	$t1="जिल्हा परिषद पूर्ण प्राथमिक शाळा<br><br> मुंढे तर्फे सावर्डे";
	$t3=$_POST['rollno'];
	$t6=$_POST['fullname'];
	$t8=$_POST['mothername'];
	$t19=$_POST['currentstd'];
	$t9=$_POST['caste'];
	$t10=$_POST['magas'];
	$t12=$_POST['dob'];
	$t14=$_POST['dobplace'];
	$t11=$_POST['nationality'];
	$t15=$_POST['taluka'];
	$t16=$_POST['district'];
	$t18=$_POST['address'];
	$t17=$_POST['phone'];
	$t7=$_POST['aadhar'];
	$t5=$_POST['todate'];
	$t4="20".date("y")."".$t19."".$t3;

	$fullname=$t6;
	$mothername=$t8;
	$std=$t19;
	$caste=$t9;
	$dob=$t12;
	$dobplace=$t14;
	$nationality=$t11;
	$gender=$gen;
	$taluka=$t15;
	$district=$t16;
	$address=$t18;
	$phone=$t17;
	$aadhar=$t7;
	$magas=$t10;
	$dt=$t5;
	$roll=$t3;
	$yr="20".date("y");
	$reg="20".date("y")."".$std."".$roll;
/*

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
	$reg="20".date("y")."".$std."".$roll;
	$magas=$_POST['magas'];
*/


}

?>