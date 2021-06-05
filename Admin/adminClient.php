<?php 
session_start();
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from user";
	$res = mysqli_query($id,$req);
	if (isset($_POST["ajout"])) {

	}


	?>
	<!DOCTYPE html>

<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/Stylesheets/styleAdmin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <div>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Admin control</header>
      <a href="adminArticle.php" >
        <i class="fas fa-cubes"></i>
        <span>Article</span>
      </a>
      <a href="#">
        <i class="fas fa-shopping-basket"></i>
        <span>Commande</span>
      </a>
      <a href="adminClient.php" class="active">
        <i class="fas fa-users" ></i>
        <span>Client</span>
      </a>
      <a href="CreaOffre.php">
         <i class="fas fa-calendar"></i>
        <span>Offre d'emplois</span>
      </a>
      <a href="#">
        <i class="far fa-question-circle"></i>
        <span>Aide</span>
      </a>
      <a href="../index.php">
        <i class="far fa-times-circle"></i>
        <span>Quitter</span>
      </a>
    </div>
</div>


<table class="content-table-client content-table">
	<tr bgcolor="#09597C">
		<th> Id </th><th> Login </th><th> Mot de passe </th>
		<th> Nom </th><th> Prénom </th>
		<th> Mail </th><th> Numéro </th><th> Admin </th>
		<th> Rue </th><th> Code postal </th> <th> Ville </th> <th></th> <th></th>
	</tr>
	<?php 
	$i = 0;
	while($ligne = mysqli_fetch_assoc($res)){
	?>
	<tr>
		<td><?=$ligne["id"]; ?></td>
		<td><?=$ligne["login"]; ?></td>
		<td><?=$ligne["mdp"]; ?></td>
		<td><?=$ligne["nom"]; ?></td>
		<td><?=$ligne["prenom"]; ?></td>
		<td><?=$ligne["mail"]; ?></td>
		<td><?=$ligne["numero"]; ?></td>
		<td><?=$ligne["adm"]; ?></td>
		<td><?=$ligne["rue"]; ?></td>
		<td><?=$ligne["code_postal"]; ?></td>
		<td><?=$ligne["ville"];?></td>
		<td> <a href="suppClient.php?row=<?=$ligne["id"];?>" ><img src="assets/img/sup.png" width="20"></a> </td>
    <td> <a href="modifClient.php?row=<?=$ligne["id"];?>"><img src="assets/img/modif.png" width="20"></a></td>
		</tr>
	<?php } $i++; ?>

</table>