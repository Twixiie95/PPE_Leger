<?php 
session_start();
$id = mysqli_connect("localhost","root","","belletable");
  $req = "select * from jobs";
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
      <a href="adminArticle.php" >
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
      <a href="#">
         <i class="fas fa-calendar" class="active"></i>
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
    <center>
    <a href="AjoutOffre.php"><input type="button" value="Ajouter une offre" class="ajoutP"></a>
  <br>
</center>
    <table class="content-table-offre content-table">
  <tr bgcolor="#09597C">
    <th> Id </th><th> Intitulé </th><th> Descprition </th><th> Date publication </th>
    <th> Catégorie <th></th><th></th>
  </tr>
  <?php 
  $i = 0;
  while($ligne = mysqli_fetch_assoc($res)){
  ?>
  <tr>
    <td><?=$ligne["ido"]; ?></td>
    <td><?=$ligne["intitule"]; ?></td>
    <td><?=$ligne["description"];?></td>
    <td><?=$ligne["datepub"]; ?></td>
    <td><?=$ligne["categorie"]; ?></td>
    <td><a href="suppOffre.php?row=<?=$ligne["ido"];?>" ><img src="assets/img/sup.png" width="20"></a></td>
    <td><a href="modifOffre.php?row=<?=$ligne["ido"];?>"><img src="assets/img/modif.png" width="20"></a></td>
    </tr>
  <?php } $i++; ?>

</table>
</body>