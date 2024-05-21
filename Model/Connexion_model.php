<?php

//le model pour la connexion, nous permet de vérifier si l'utilisateur existe bien dans la base de données
require ('Conf/conf.inc.php');

//une fonction pour vérifier si l'utilisateur existe bien dans la base de données
function verif_utilisateur($client_mail)
{
    //on se connecte à la base de données
    $db= new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASSWORD);
    //la requête
    $req = $db->query("SELECT * FROM clients WHERE client_email = '$client_mail'");
    //on récupère le résultat
    $resultat = $req->fetch();
    //on retourne le résultat
    return $resultat;
}

function inscription_utilisateur($client_mail,$client_mdp,$client_nom,$client_prenom,$client_adr,$client_cp,$client_ville,$client_pays,$client_tel,$client_date_naiss,$client_genre)
{
    //on se connecte à la base de données
    $db= new PDO('mysql:host='.HOST.';dbname='.DBNAME,USER,PASSWORD);
    //on execute la requete
    $req = $db->query('INSERT INTO clients(client_email, client_mdp, client_nom, client_prenom, client_adr, client_cp, client_ville, client_pays, client_tel, client_date_naiss, client_genre) VALUES ("'.$client_mail.'","'.$client_mdp.'","'.$client_nom.'","'.$client_prenom.'","'.$client_adr.'","'.$client_cp.'","'.$client_ville.'","'.$client_pays.'","'.$client_tel.'","'.$client_date_naiss.'","'.$client_genre.'")');
    return $req;
}

?>