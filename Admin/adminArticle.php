<?php 
session_start();
$id = mysqli_connect("localhost","root","","belletable");
	$req = "select * from articles";
	$res = mysqli_query($id,$req);
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
      <a href="adminArticle.php" class="active">
        <i class="fas fa-cubes"></i>
        <span>Article</span>
      </a>
      <a href="#">
        <i class="fas fa-shopping-basket"></i>
        <span>Commande</span>
      </a>
      <a href="adminClient.php">
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
    <body>
      
      <br>
    

  <br> 
    <center>
      <a href="Ajoutproduit.php"><input type="button" value="Ajouter un produit" class="ajoutP"></a>
    </center>
    
      
      <center>
        <table class="content-table-admin content-table">
          <tr bgcolor="#09597C">
            <th> Id </th><th> Référence </th><th> Qte Dispo </th>
            <th> Conditionnement </th><th> Prix vente </th>
            <th> Prix location </th><th> Remarque </th><th> Désignation </th>
            <th> TVA </th><th> Statut </th> <th></th><th></th>
          </tr>
          <?php 
          $i = 0;
          while($ligne = mysqli_fetch_assoc($res)){
          ?>
          <tr>
            <td><?=$ligne["id"]; ?></td>
            <td><?=$ligne["reference"]; ?></td>
            <td><?=$ligne["quantite_dispo"]; ?></td>
            <td><?=$ligne["conditionnement"]; ?></td>
            <td><?=$ligne["prix_vente"]; ?>€</td>
            <td><?=$ligne["prix_location"]; ?>€/Jour</td>
            <td><?=$ligne["remarque"]; ?></td>
            <td><?=$ligne["designation"]; ?></td>
            <td><?=$ligne["tva"]; ?>%</td>
            <td><?=$ligne["statut"]; ?></td>
            <td><a href="suppArticle.php?row=<?=$ligne["id"];?>" ><img src="assets/img/sup.png" width="20"></a></td>
            <td><a href="modifArticle.php?row=<?=$ligne["id"];?>"><img src="assets/img/modif.png" width="20"></a></td>
            </tr>
          <?php } $i++; ?>
        </table>
      </center>
      <div class="row-lg-8">


</div>
</body>
</html>
