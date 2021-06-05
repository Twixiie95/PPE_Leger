
<?php
	session_start();
	require 'header.php';
	$id = mysqli_connect("localhost","root","","belletable");
  	if (isset($_SESSION["login"]))
  	{
    	$login1 = $_SESSION["login"];
    	$req1 = "select * from user where adm = 1 and login = '$login1'";
    	$res1 = mysqli_query($id, $req1);
    	mysqli_query($id,"SET NAMES 'utf8'");
    	$num_rows = mysqli_num_rows($res1);
  	}
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8" />
	<head>
		<title> QCM Belle Table </title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    	<link rel="stylesheet" href="assets/Stylesheets/style.css" /> 
	</head>
	<header>
        
  	</header>
	<center>
		<h1> Login QCM Emploi Belle Table </h1>
		<?php
		if (!isset($_POST["monbout"]))
		{
		?>
		<form method="post" action="qcm.php">
			Niveau de difficulté 1 :<input type='radio' name='niveau' value='1'>
			Niveau de difficulté 2 :<input type='radio' name='niveau' value='2'>
			<input type="submit" value="Valider" name="monbout">
		</form>
		<?php
		}
		if (isset($_POST["monbout"]))
		{
			$niveau = $_POST['niveau'];
			$_SESSION["niveau"] = $niveau;
			$id = mysqli_connect("localhost","root","","belletable");
			mysqli_query($id, "SET NAMES 'utf8'");
			$req = "select * from questions where $niveau = niveau order by rand() limit 10";
			$res = mysqli_query($id, $req);
			?>
			<form method="post" action="qcmrep.php">
				<?php
				while ($ligne = mysqli_fetch_assoc($res))
				{
					echo "<h3>".$ligne["libelle"]."</h3>";
					echo '<br />';
					$req2 = "select * from reponse where idq =".$ligne['idq']." order by rand()";
					$res2 = mysqli_query($id, $req2);
					while ($ligne2 = mysqli_fetch_assoc($res2))
					{
						echo "<input type='radio' name='".$ligne["idq"]."' value='".$ligne2["ok"]."''>" .$ligne2["libelle"]."<br />";
					}
					echo '<br /><br />';
				}
				?>
			<input type="submit" value="Valider" >
			</form>
		<?php
		}
		?>
	</center>
	<!-- Pied de page
    ================================================== -->
    
    <?php

    require'footer.php';

    ?>
