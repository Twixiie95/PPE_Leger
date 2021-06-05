<?php
require 'header.php';
if (isset($_GET['del']))
{
    $panier->del($_GET['del']);
}
?>
<center>
        <div class="titre">
            <div class="wrap">
                <h2>Votre Panier</h2>
                <a href="#" class="valider_panier"></a>
            </div>
        </div>
        <div class="tableau">
            <div class="wrap">
                <div class="titreligne">
                    <span class="nom">Nom</span>&nbsp&nbsp&nbsp
                    <span class="prix">Prix unitaire</span>&nbsp&nbsp&nbsp
                    <span class="quantité">Quantité</span>&nbsp&nbsp&nbsp
                    <span class="total">Prix avec TVA</span>&nbsp&nbsp&nbsp
                    <span class="actions">Actions</span>
                </div>
                <?php
                $ids = array_keys($_SESSION['panier']);
                
                $articles = $DB->query('SELECT * FROM articles WHERE id IN ('.implode(',',$ids).')');
                
                foreach ($articles as $article):
                    var_dump($article);
                    ?>
                
                <div class="ligne col-md-12">
                    <img class="produits_panier" src="assets/img/<?=$article->img;?>">
                    <span class="nom"><?=$article->designation; ?></span>&nbsp&nbsp&nbsp
                    <span class="prix"><?= number_format($article->prix_vente,2,',',' '); ?>€</span>&nbsp&nbsp&nbsp
                    <span class="quantité">Quantité</span>&nbsp&nbsp&nbsp
                    <span class="total"><?= number_format($article->prix_vente * 1.196,2,',',' '); ?>€</span>&nbsp&nbsp&nbsp
                    <span class="actions">Les actions
                        <a href="panier.php?del=<?=$article->id; ?>"><i class="fa fa-del fa-2x suppp"></i></a>
                    </span>
                </div>
                <?php endforeach; ?>
                <div class="ligne_total">
                    Total : <span class="total">TOTAL</span>
                </div>
            </div>
        </div>
<center>


<?php 

require 'footer.php';

?>