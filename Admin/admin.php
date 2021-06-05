<?php 
session_start();
$id = mysqli_connect("localhost","root","","belletable");
 ?>



<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Responsive Sidebar Menu</title> -->
    <link rel="stylesheet" href="assets/Stylesheets/styleAdmin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Admin control</header>
      <a href="adminArticle.php">
        <i class="fas fa-cubes"></i>
        <span>Article</span>
      </a>
      <a href="#">
        <i class="fas fa-shopping-basket"></i>
        <span>Commande</span>
      </a>
      <a href="AdminClient.php">
        <i class="fas fa-users" ></i>
        <span>Client</span>
      </a>
      <a href="#">
         <i class="fas fa-calendar"></i>
        <span>Offre d'emplois</span>
      </a>
      <a href="#">
        <i class="far fa-question-circle"></i>
        <span>Centre d'aide</span>
      </a>
      <a href="../index.php">
        <i class="far fa-times-circle"></i>
        <span>Quitter</span>
      </a>
    </div>
</body>
</html>
