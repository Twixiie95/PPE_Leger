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
if(isset($_POST["bout"]))
{
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];
	$req = "select * from user where login='$login' and mdp='$mdp'";
	$res = mysqli_query($id,$req);
	$transfert = mysqli_fetch_array($res);
	$_SESSION["nom"] = $transfert["nom"];
	$_SESSION["prenom"] = $transfert["prenom"];
  $_SESSION["login"] = $transfert["login"];
  $_SESSION["mail"] = $transfert["mail"];
  $_SESSION["numero"] = $transfert["numero"];
  $_SESSION["rue"] = $transfert["rue"];
  $_SESSION["code_postal"] = $transfert["code_postal"];
  $_SESSION["ville"] = $transfert["ville"];
	if(mysqli_num_rows($res) > 0)
	{
		$_SESSION["login"] = $login;
		$res2 = mysqli_query($id,$req2);
		header("location: index.php");
	}else{
		$erreur = "<h3> Erreur login ou mot de passe invalide </h3>";
	}
}

?>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
		<meta charset="utf-8" />
		<title> Belletable </title>
	</head>
	<header>
        <center>
          <?php include_once("header.php"); ?>
  		</center>
  	</header>
	<body>
	<center>
	<h1> Connexion </h1>
	<form action="connexion.php" method="post">
	<?php if(isset($erreur)) echo $erreur;?>
	Login : <input type="text" name="login" ><br><br>
	Mot de passe : <input type="password" name="mdp" ><br><br>
	<input type="submit" value="Connexion" name="bout">
	</form>
	
  <?php

  require'footer.php';

  ?>