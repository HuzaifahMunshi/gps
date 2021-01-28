<?php
	$dbh=new PDO("mysql:host=localhost;dbname=uba","root","");
	$id = isset($_GET['id'])? $_GET['id'] : "";
	$std1 = isset($_GET['stnd'])? $_GET['stnd'] : "";
	if($std1=="1"||$std1=="2"||$std1=="3"||$std1=="4"||$std1=="5"||$std1=="6"||$std1=="7"){
		$std="std".$std1;
	}else{
		$std="exist_student";
	}
	$stat=$dbh->prepare("select * from ".$std." where reg=?");
	
	$stat->bindParam(1,$id);
	$stat->execute();
	$row=$stat->fetch();
	header('Content-Type:'.$row['aadhar_type']);
	echo $row['aadhar_data'];
?>
		