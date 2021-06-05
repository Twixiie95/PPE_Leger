<?php
session_start();
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
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
		<meta charset="utf-8" />
		<title> Belletable </title>
	</head>

      <!-- Navigation
      ================================================== -->
    <body>
    <header>
        <center>
          <?php include_once("header.php");?>
  		</center>
  	</header>
	<center>
		<h1 class="text-center">Présentation de Belletable</h1>
    <br>
    <div class="container fond" id="qui">
        <p class="col-sm-12 col-md-12 pres_belletable">Spécialiste de la vente et la location de tous les matériels, la vaisselle, les couverts et tous autres accessoires permettant de dresser une « Belle Table », Belle Table vous propose un catalogue complet de matériel en un seul prestataire :
        VAISSELLE, TABLES, CHAISES, LINGE DE TABLE, TENTES, MOBILIER LUMINEUX, MATERIEL DE CUISINE, … <br>
        Pour vos mariages, anniversaires, séminaires… <br>Toute l’équipe de Belle Table est à votre service pour faire de votre événement professionnel ou personnel, une réussite.</p>
      </div>
      <br><br>
		<div class="container">
        <div class="row-lg-8">
          <div id ="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active"></li>
              <li data-target="#carousel" data-slide-to="1"></li>
              <li data-target="#carousel" data-slide-to="2"></li>
              <li data-target="#carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
              <div class="item active"> <img src="assets/img/Photo_1.jpg" alt="Architecture">
                <h1 class="carousel-caption">Nos dernières réalisations</h2></div>
              <div class="item"> <img src="assets/img/Photo_2.jpg" alt="Architecture">
                <h1 class="carousel-caption">Nos dernières réalisations</h2></div>
              <div class="item"> <img src="assets/img/Photo_3.jpeg" alt="Architecture">
                <h1 class="carousel-caption">Nos dernières réalisations</h2></div>
              <div class="item"> <img src="assets/img/Photo_4.jpeg" alt="Architecture">
                <h1 class="carousel-caption">Nos dernières réalisations</h2></div>
              </div>
            <a class="left carousel-control" href="#carousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            </div>
          </div>
        </div>
      </div>

      <br><br>
	


      <br><br>
      <div class="container fond" id="contact">
        <h1 class="text-center">Un message pour nous ?</h1>
        <form class="row" method="post">
          <div class="form-group col-lg-4">
            <input type="email" class="form-control" placeholder="Votre email">
          </div>
          <div class="form-group col-lg-8">
            <textarea class="form-control" rows="3" placeholder="Votre message"></textarea>
          </div>
          <div class="form-group col-lg-12">
            <button type="submit" class="btn reseau">Envoyer</button>
          </div>
        </form>
      </div>
  </div>
<br><br>


 <?php

 require'footer.php'

 ?>

		<script>
      // Scrollspy fluide
      $(function () {
        $('header a').on('click', function(e) {
          //e.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(this.hash).offset().top
          }, 2000, function(){
            window.location.hash = hash; 
          });
        });
      });
    </script>