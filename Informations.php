<?php 
	session_start();
  $id = mysqli_connect("localhost","root","","belletable");
  if (isset($_SESSION["login"]))
  {
    $login = $_SESSION["login"];
    $req1 = "select * from user where adm = 1 and login = '$login'";
    $res1 = mysqli_query($id, $req1);
    mysqli_query($id,"SET NAMES 'utf8'");
    $num_rows = mysqli_num_rows($res1);
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
          	<?php include_once("header.php"); ?>
  		</center>
  	</header>
	<center>
    <body>
      <br><br><br>
      <div class="container fond">
        <h1 class="text-center">Notre équipe</h1>
        <img class="col-sm-12 col-md-5 col-md-push-7" src="assets/img/téléchargement.jpeg"> 
        <p class="col-sm-12 col-md-7 col-md-pull-5 txtinfo"><br><br>
        Notre équipe est composée de 40 salariés qui travaillent au sein de la société BELLETABLE, 37 à temps complet, 3 à mi-temps. Parfois, pour faire face à la charge supplémentaire, la société BELLETABLE fait appel à un ou plusieurs intérimaires.
        </p>
      </div>
      <br><br>
      <div class="container fond">
        <h1 class="text-center">Nos locaux</h1>
        <p class="col-sm-12 col-md-12 txtinfo"><br>
        Nos locaux sont situés au 20, rue de la gare 75100 Paris.<br> On y retrouve notre magasin, nos stocks ainsi que nos différents bureaux </p><br>&nbsp
      </div>

      <br><br>
      <div class="container fond">
        <h1 class="text-center">Notre équipement informatique</h1>
        <p class="col-sm-12 col-md-12 txtinfo"><br>
        Notre Notre parc informatique est simple : un PC fixe par salarié sédentaire (soit 37).Le câblage de l’ensemble du bâtiment est en catégorie 4, de type UTP supportant une bande passante de 10 Mb/s.<br> 
        3 bandeaux identiques de 24 ports chacun sont présents dans notre baie, située dans le local technique, devenu le local serveurs. 
        Les lignes EDF et ADSL arrivent dans ce même local. 
        </p><br>&nbsp
      </div>
      <br><br>
    </body>
  </center>
    <!-- Pied de page
    ================================================== -->
 <?php

 require'footer.php';

 ?>