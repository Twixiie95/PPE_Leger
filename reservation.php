<?php
session_start();
$id = mysqli_connect("localhost","root","","belletable");
if (isset($_SESSION["login"]))
  {
    $login1 = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
  }
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8" />
	<head>
		<title>Nos Produits</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
	</head>
	<header>
        <center>
          	<?php include_once("header.php"); ?> 
  		</center>
  	</header>
	<center>
    <div class="container fond" id="qui">
        <h1 class="text-center">Présentation</h1>
        <p class="col-sm-12 col-md-12">
          <i class="fa fa-cart-arrow-down fa-3x"></i>
          <i class="fa fa-calendar-check fa-3x"></i>
        </p>
      </div>
		<form method="post" action="reservation.php">
			Assiettes
				<option>Modèle 1</option>
				<option>Modèle 2</option>
				<option>Modèle 3</option>
			<ul>Couverts
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			</ul>
			<ul>Verres
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			</>
			<ul>Verines et contenants
				<li>Modèle 1</li>
				<li>Modèle 2</li>
				<li>Modèle 3</li>
			<ul/>
			<input type="submit" value="Valider" name="recherche">
		</form>
		<!-- Pied de page
    ================================================== -->
    <?php

    require'footer.php';

    ?>