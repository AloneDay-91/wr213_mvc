<?php

require './Conf/conf.inc.php';

function getJeux()
{
    try {
        $bd = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8', USER, PASSWORD);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    $req = 'SELECT * FROM jeux';
    try {
        $jeux = $bd->query($req);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $jeux;
}

function getJeu($jeu_code) {
    try {
        $bd = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';charset=utf8', USER, PASSWORD);
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de donnée : ' . $e->getMessage());
    }
    $req = 'SELECT * FROM jeux WHERE jeu_code = ' . $jeu_code;
    $req = $bd->query($req);
    $resultat = $req->fetch();
    return $resultat;
}
?>