<?php
	$dbh=new PDO("mysql:host=localhost;dbname=uba","root","");
	$id = isset($_GET['id'])? $_GET['id'] : "";
	$stat=$dbh->prepare("select id,name,type,aadhar_data from std1 where id=?");
	$stat->bindParam(1,$id);
	$stat->execute();
	$row=$stat->fetch();
	header('Content-Type:'.$row['type']);
	echo $row['aadhar_data'];
	?>
		