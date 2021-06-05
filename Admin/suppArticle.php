<?php

$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "delete from articles where id=$row";
	$res2 = mysqli_query($id,$req);
header("location:adminArticle.php");
	
	?>