<?php
require 'header.php';
if(isset($_GET["id"]))
{
    $articles = $DB->query('SELECT id FROM  articles WHERE id=:id', array('id' => $_GET['id']));

    if (empty($articles))
    {
        die("Ce produit n'existe pas");
    }
    $panier->add($articles[0]->id);
    die('<center>Le produit a bien été ajouté au panier <a class="lien_retour" href="javascript:history.back()">retourner sur le catalogue</a>');
} else
{
    die("Vous n'avez pas sélectionné de produit a ajouter");
}
require 'footer.php';
?>