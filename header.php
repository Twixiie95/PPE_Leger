<?php
require 'db.class.php';
require 'panier.class.php';
$DB = new DB();
$panier = new panier();

$id = mysqli_connect("localhost","root","","belletable");
  if (isset($_SESSION["login"]))
  {
    $login = $_SESSION["login"];
    $req = "select * from user where adm = 1 and login = '$login'";
    $res = mysqli_query($id, $req);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res);
  }

?>
<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/Stylesheets/styleHeader.css" /> 
    <script src="https://kit.fontawesome.com/784f019bd6.js" crossorigin="anonymous"></script>
		<meta charset="utf-8" />
		<title> Belletable </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active"><img class="icone" src="assets/img/logobelletable.png" ></a>
  <a href="informations.php" class="lien">Qui sommes-nous ?</a>
  <a href="index.php#contact" class="lien">Contact</a>
  <a href="produits.php" class="lien">Nos produits</a>
  <a href="offresemploi.php" class="lien">Nos offres d'emplois</a>

      <?php if (!isset($_SESSION["login"])) { ?>
        <a href="connexion.php" class="lien" style="float: right;">Connexion</a>
        <a href="inscription.php" class="lien" style="float: right;">Inscription</a>
        <?php }
        else { ?>
          <a href="deconnexion.php" class="lien" style="float: right;">Deconnexion</a>
          <a href="panier.php" class="lien" style="float: right;">Votre Panier</a>
          <a href="profil.php" class="lien" style="float: right;"><?php echo "Bonjour ".$_SESSION["nom"]." ".$_SESSION["prenom"]." !"; ?></a>
          
          
          <?php if ($num_rows > 0) {?>
                          <li><a href="Admin/admin.php" class="lien" style="float: right;">Gestion du Site</a></li>
                        <?php } ?>
                     <?php } ?>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>