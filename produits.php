<?php 
session_start();
  require 'header.php';
  $articles = $DB->query('SELECT * FROM articles');
  
  $id = mysqli_connect("localhost","root","","belletable");
  if (isset($_SESSION["login"]))
  {
    $login1 = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
  }
  $req = "select * from articles";
  $res = mysqli_query($id, $req);
  mysqli_query($id,"SET NAMES 'utf8'");
	
?>

<html>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
		<meta charset="utf-8" />
		<title> Belletable </title>
	</head>

      <!-- Navigation
      ================================================== -->
    <body>
    <header>
        
          	<?php include_once("header.php"); ?> 
    <center>
    <h1>Nos Produits</h1>
    </center>
  </header>
  <div class="row">
    <div class="col-lg-12 jumbotron">
      <?php
      $i = 1;
        while ($ligne = mysqli_fetch_assoc($res))
        {
          if ($i % 4 == 0)
          {
            echo "<div class='row'><div class='col-lg-3 text-center border border-secondary'>
            &nbsp&nbsp&nbsp<h4>".$ligne["designation"]."</h4><br>
            <img class='produits' src=assets/img/".$ligne["img"]."><br><br>
            &nbspConditionnement :&nbsp&nbsp".$ligne["conditionnement"]."<br>
            &nbspQuantité disponible :&nbsp&nbsp".$ligne["quantite_dispo"]."<br>
            &nbspPrix achat :&nbsp&nbsp".$ligne["prix_vente"]."€<br>
            &nbspPrix de la location/jour:&nbsp&nbsp".$ligne["prix_location"]."€<br>
            <a class='add' href='addpanier.php?id=".$ligne["id"]."'><i class='fa fa-shopping-basket fa-2x btn'></i>Ajouter au panier</a><br></div></div>";
          }
          else
          {
            echo "<div class='col-lg-3 text-center border border-secondary'>
            &nbsp&nbsp&nbsp<h4>".$ligne["designation"]."</h4><br>
            <img class='produits' src=assets/img/".$ligne["img"]."><br><br>
            &nbspConditionnement :&nbsp&nbsp".$ligne["conditionnement"]."<br>
            &nbspQuantité disponible :&nbsp&nbsp".$ligne["quantite_dispo"]."<br>
            &nbspPrix achat :&nbsp&nbsp".$ligne["prix_vente"]."€<br>
            &nbspPrix de la location/jour:&nbsp&nbsp".$ligne["prix_location"]."€<br>
            <a class='add' href='addpanier.php?id=".$ligne["id"]."'><i class='fa fa-shopping-basket fa-2x btn'></i>Ajouter au panier</a><br></div>";
          }
          $i++;
        }
      ?>
    </div>
  </div>
    <!-- Pied de page
    ================================================== -->  
    
    <?php

    require 'footer.php';

    ?>