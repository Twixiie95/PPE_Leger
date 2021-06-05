<?php
$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from user where id=$row";
	$res2 = mysqli_query($id,$req);
	$ligne2 = mysqli_fetch_assoc($res2);

	if(isset($_POST["monBout"]))
	{
		$reference = $_POST["reference"];
		$qte = $_POST["qte"];
		$conditionnement = $_POST["conditionnement"];
		$prixV = $_POST["prixV"];
		$prixL = $_POST["prixL"];
		$remarque = $_POST["remarque"];
		$designation = $_POST["designation"];
		$tva = $_POST["tva"];
		$statut = $_POST["statut"];
			$req2 = "update articles 
						set reference = '$reference',
							quantite_dispo = '$qte',
							conditionnement = '$conditionnement',
							prix_vente = '$prixV',
							prix_location = '$prixL',
							remarque = '$remarque',
							designation = '$designation',
							tva = '$tva',
							statut = '$statut'
					where id='$row'";
			$res = mysqli_query($id,$req2);
		header("location:adminClient.php");
	}

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Formulaire </title>
	</head>
	<body>
	<center>
	<h1> Modification du client <?=$ligne2["nom"] ," ", $ligne2["prenom"];?> </h1>
	<form action="modifClient.php" method="post">
	Login : <input type="text" name="login" value="<?=$ligne2["login"];?>"><br><br>
	Mot de passe : <input type="text" name="mdp" value="<?=$ligne2["mdp"];?>"><br><br>
	Nom : <input type="text" name="nom" value="<?=$ligne2["nom"];?>"><br><br>
	Prenom : <input type="text" name="prenom" value="<?=$ligne2["prenom"];?>"><br><br>
	Mail : <input type="text" name="mail" value="<?=$ligne2["mail"];?>"><br><br>
	Numéro : <input type="text" name="numero" value="<?=$ligne2["numero"];?>"><br><br>
	Admin : <input type="text" name="adm" value="<?=$ligne2["adm"];?>"><br><br>
	Rue : <input type="text" name="rue" value="<?=$ligne2["rue"];?>"><br><br>
	Code Postal : <input type="text" name="code_postal" value="<?=$ligne2["code_postal"];?>"><br><br>
	<input type="submit" value="Envoyer" name="monBout">
	</form>