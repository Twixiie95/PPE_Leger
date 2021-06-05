<?php 
class panier{
    
    public function __construct()
    {
        if (!isset($_SESSION))
        {
            session_start();
        }
        if (!isset($_SESSION['panier']))
        {
            $_SESSION['panier'] = array();
        }
    }
    public function add($articles_id)
    {
        $_SESSION["panier"][$articles_id] = 1;
    }
    public function del($article_id)
    {
        unset($_SESSION['panier'][$article_id]);
    }
}
?>