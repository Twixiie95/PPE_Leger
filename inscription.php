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
if(isset($_POST["bout"])){
	$login = $_POST["login"];
	$mdp = $_POST["mdp"];
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$numero = $_POST["numero"];
	$mail = $_POST["mail"];
  $rue = $_POST["rue"];
  $code_postal = $_POST["code_postal"];
  $ville = $_POST["ville"];
	$req = "select * from user
			where login='$login' or mail='$mail' or numero='$numero'";
	$res = mysqli_query($id,$req);
	$req2 = "insert into user(login, mdp, nom, prenom, mail, numero, adm, rue , code_postal , ville ) values('$login', '$mdp', '$nom', '$prenom', '$mail', '$numero','0','$rue','$code_postal','$ville')";
	

	if(mysqli_num_rows($res)==0){
    $_SESSION["prenom"] = $prenom;
    $_SESSION["nom"] = $nom;
    $_SESSION["numero"] = $numero;
    $_SESSION["mail"] = $mail;
    $_SESSION["rue"] = $rue;
    $_SESSION["code_postal"] = $code_postal;
    $_SESSION["ville"] = $ville;
		$_SESSION["login"] = $login;
		$res2 = mysqli_query($id,$req2);
		header("location:acceuil.php");
			}
	else
		$erreur = "<h3> Login ou mail déja utilisé </h3>";
}
?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Belletable </title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
	</head>
	<header>
        <center>
          	<?php include_once("header.php"); ?>
  		</center>
  	</header>
	<body>
	<center>
	<h1> Inscription </h1>
	<form action="inscription.php" method="post">
	<?php if(isset($erreur)) echo $erreur;?>
	Login : <input type="text" name="login" required><br><br>
	Nom : <input type="text" name="nom" required ><br><br>
	Prénom : <input type="text" name="prenom" required><br><br>
	Mot de passe : <input type="password" name="mdp" required ><br><br>
	Adresse mail : <input type="mail" name="mail" required><br><br>
	Numéro de telephone : <input type="tel" name="numero" required><br><br>
  	Adresse postale : <input type="text" name="rue" required><br><br>
  	Code Postal : <input type="text" name="code_postal" required><br><br>
  	Ville : <input type="text" name="ville" required><br><br>
	<input type="submit" name="bout" value="Envoyer">
	</form>
</body>
	
<?php

require'footer.php';
?>