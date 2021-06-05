<?php
	session_start();
  $id = mysqli_connect("localhost","root","","belletable");
  if (isset($_SESSION["login"]))
  {
    $login = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
  }

	$req = "select * from jobs";
	$res2 = mysqli_query($id, $req);
	mysqli_query($id,"SET NAMES 'utf8'");
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8" />
	<head>
		<title>Nos offres d'emplois</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css"/>
	</head>
	<header>
      <center>
        <?php include_once("header.php"); ?>
  		</center>
  	</header>
  	<br>
	<center><h1>Nos offres d'emplois</h1><centrer>
	<br>
	<?php
		while ($ligne = mysqli_fetch_assoc($res2))
		{
			echo "<div>&nbspType d'emploi:<br>&nbsp".$ligne["categorie"].
			"<br>&nbspDétail de l'offre :<br>&nbsp".$ligne["intitule"].
			"<br>&nbspDate de publication :<br>&nbsp".$ligne["datepub"].
			"&nbsp&nbsp <a href='qcm.php?id=".$ligne["ido"]."'><input type='button' class='boutoffre' name='postuler' value='Postuler'></a><br><br></div>";
		}
	?>
		<!-- Pied de page
    ================================================== -->	
    
    <?php

    require'footer.php';

    ?>