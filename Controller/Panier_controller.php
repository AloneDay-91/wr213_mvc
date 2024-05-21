<?php
require ('Model/Jeux_model.php');
session_start();

function ajouter_produit_panier($id_produit) {
    if (!isset($_SESSION['panier'])) {
        $_SESSION['panier'] = array();
    }
    if(isset($_SESSION['panier'][$id_produit])) {
        $_SESSION['panier'][$id_produit]['quantite'] = $_SESSION['panier'][$id_produit]['quantite'] + 1;
    } else {
        $_SESSION['panier'][$id_produit]['quantite'] = 1;
    }
    //var_dump($_SESSION['panier']);
    return afficher_panier();
}

function afficher_panier() {
    if (!empty($_SESSION['panier'])) {
        $panier = $_SESSION['panier'];
        $infos_produits = array();
        foreach($panier as $cle => $produit) {
            $infos_produits[] = getJeu($cle);
        }

        require('View/autres_pages/header.php');
        require('View/autres_pages/menu.php');
        require('View/panier_view.php');
        require('View/autres_pages/footer.php');
    } else {
        require('View/autres_pages/header.php');
        require('View/autres_pages/menu.php');
        echo '<p style="margin-top: 100px;text-align: center">Votre panier est vide</p>';
        require('View/autres_pages/footer.php');
    }
}


function supprimer_produit_panier($id_produit) {
    if (isset($_SESSION['panier'][$id_produit])) {
        unset($_SESSION['panier'][$id_produit]);
    }
    return afficher_panier();
}

?>
