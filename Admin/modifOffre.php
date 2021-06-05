<?php
$row = $_GET["row"];
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from jobs where ido=$row";
	$res2 = mysqli_query($id,$req);
	$ligne2 = mysqli_fetch_assoc($res2);

	if(isset($_POST["monBout"]))
	{
		$intitule = $_POST["intitule"];
		$categorie = $_POST["categorie"];
			$req2 = "update jobs 
						set intitule = '$intitule',
							categorie = '$categorie',
					where ido='$row'";
			$res = mysqli_query($id,$req2);
		header("location:CreaOffre.php");
	}

?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Formulaire </title>
	</head>
	<body>
	<center>
	<h1> Modification de l'offre <?=$ligne2["intitule"];?> </h1>
	<form action="modifOffre.php" method="post">
	Intitule : <input type="text" name="intitule" value="<?=$ligne2["intitule"];?>"><br><br>
	Catégorie: <input type="text" name="categorie" value="<?=$ligne2["categorie"];?>"><br><br>
	<input type="submit" value="Envoyer" name="monBout">
	</form>