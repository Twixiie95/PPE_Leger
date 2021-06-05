 <?php 
 if (isset($_POST["ajout"])) {
 	$id = mysqli_connect("localhost","root","","belletable");
    $reference = $_POST["reference"];
    $qte = $_POST["qte"];
    $condi = $_POST["conditionnement"];
    $prixV = $_POST["prix_vente"];
    $prixL = $_POST["prix_location"];
    $remarque = $_POST["remarque"];
    $designation = $_POST["designation"];
    $tva = $_POST["tva"];
    $statut = $_POST["statut"];
    $req2 = "insert into articles (reference, quantite_dispo, conditionnement, prix_vente, prix_location, remarque, designation, tva, statut)
        VALUES ('$reference', '$qte', '$condi', '$prixV','$prixL','$remarque','$designation','$tva','$statut')";
        $res2 = mysqli_query($id,$req2);
       header("location:adminArticle.php");
  }
 ?>




<center>
<div class="formu">
<h1 id="tit">AJOUT DE PRODUIT</h1>
<form action="ajoutproduit.php" enctype="multipart/form-data" method="POST" >
	<input type="hidden" name="MAX_FILE_SIZE" value="250000" />
	Référence :<br><input type="text" name="reference"><br>
	Qte dispo :<br><input type="text" name="qte"><br>
	Conditionnement :<br><input type="text" name="conditionnement"><br>
	Prix vente :<br><input type="text" name="prix_vente"><br>
	Prix location :<br><input type="text" name="prix_location"><br>
	Remarque :<br><input type="text" name="remarque"><br>
	Designation :<br><input type="text" name="designation"><br>
	TVA :<br><input type="text" name="tva"><br>
	Statut :<br><input type="text" name="statut"><br>
	Image :<br><input type="file" name="fic" size=50 /><br>
	<input type="submit" name="ajout">
</form>
<hr>
</div>
</center>