<?php
$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from articles where id=$row";
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
		header("location:adminArticle.php");
	}

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Formulaire </title>
	</head>
	<body>
	<center>
	<h1> Modification de l'article <?=$ligne2["designation"];?> </h1>
	<form action="modifArticle.php" method="post">
	Référence : <input type="text" name="reference" value="<?=$ligne2["reference"];?>"><br><br>
	Quantité dispo : <input type="text" name="qte" value="<?=$ligne2["quantite_dispo"];?>"><br><br>
	Conditionnement : <input type="text" name="conditionnement" value="<?=$ligne2["conditionnement"];?>"><br><br>
	Prix vente : <input type="text" name="prixV" value="<?=$ligne2["prix_vente"];?>"><br><br>
	Prix location : <input type="text" name="prixL" value="<?=$ligne2["prix_location"];?>"><br><br>
	Remarque : <input type="text" name="remarque" value="<?=$ligne2["remarque"];?>"><br><br>
	Désignation : <input type="text" name="designation" value="<?=$ligne2["designation"];?>"><br><br>
	TVA : <input type="text" name="tva" value="<?=$ligne2["tva"];?>"><br><br>
	Statut : <input type="text" name="statut" value="<?=$ligne2["statut"];?>"><br><br>
	<input type="submit" value="Envoyer" name="monBout">
	</form>