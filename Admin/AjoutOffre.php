<?php
$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from  where id=$row";
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
		header("location:CreaOffre3.php");
	}
?>