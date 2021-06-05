<?php

$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "delete from jobs where ido=$row";
	$res2 = mysqli_query($id,$req);
header("location:CreaOffre.php");
	
	?>