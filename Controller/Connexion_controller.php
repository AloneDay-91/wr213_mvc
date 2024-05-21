<?php

// un controleur pour la connexion

// on appelle le modèle pour la connexion
require_once('Model/Connexion_model.php');

// la function index nous permet d'afficher la page de connexion, elle appelera la vue connexion_view.php
function index() {
    require('View/autres_pages/header.php');
    require('View/autres_pages/menu.php');
    require('View/Connexion_view.php');
    require('View/autres_pages/footer.php');
}

// function pour afficher le page d'inscription

function inscription() {
    require('View/autres_pages/header.php');
    require('View/autres_pages/menu.php');
    require('View/Inscription_view.php');
    require('View/autres_pages/footer.php');
}

//la function connexion nous permet de vérifier si l'utilisateur est bien connecté
function verif_connexion()
{

    //on vérifie si les champs sont bien remplis
    if(isset($_POST['client_mail']) && isset($_POST['mot_de_passe']))
    {
        //on uilise la fonction verif_utilisateur du modèle connexion_model
        // cette fonction n'existe pas encore dans notre modele, nous allons l'ecrire apres.
        $resultat=verif_utilisateur($_POST['client_mail']);

        //on vérifie si le login et le mot de passe sont corrects avec le hash du mot de passe
        if($resultat['client_email']==$_POST['client_mail'] && password_verify($_POST['mot_de_passe'],$resultat['client_mdp']))
        {
            //si c'est le cas, on crée une session pour l'utilisateur
            session_start();
            $_SESSION['client_nom']=$resultat['client_nom'];
            //on affiche un message de connexion réussie
            //echo 'connexion réussie';
            header('Location: /accueil');
        }
        else
        {
            //on affiche un message d'erreur si le login ou le mot de passe sont incorrects
            //echo 'erreur de connexion login ou mot de passe incorrects';
            session_start();
            $affichage_retour = 'erreur de connexion login ou mot de passe incorrects';
            header('Location: /connexion');
            $_SESSION['information'] = $affichage_retour;
        }

    }
    else
    {
        //si les champs ne sont pas remplis
        //on affiche un message d'erreur si les champs ne sont pas remplis
        //echo 'erreur de connexion les champs ne sont pas remplis';
        session_start();
        $affichage_retour = 'erreur de connexion les champs ne sont pas remplis';
        header('Location: /connexion');
        $_SESSION['information'] = $affichage_retour;
    }
}

function validation_inscription()
{
    //on vérifie si les champs sont bien remplis
    if(isset($_POST['client_mail']) && isset($_POST['mot_de_passe']) && isset($_POST['mot_de_passe2']) && isset($_POST['client_nom']) && isset($_POST['client_prenom'])&& isset($_POST['client_adr'])&& isset($_POST['client_cp'])&& isset($_POST['client_ville'])&& isset($_POST['client_pays'])&& isset($_POST['client_tel'])&& isset($_POST['client_date_naiss'])&& isset($_POST['client_genre']))
    {
        //on vérifie si les deux mots de passe sont identiques
        if($_POST['mot_de_passe']==$_POST['mot_de_passe2'])
        {
            //on vérifie si l'utilisateur existe déjà
            $resultat=verif_utilisateur($_POST['client_mail']);

            if(!$resultat)
            {
                //on hash le mot de passe
                $mdp=password_hash($_POST['mot_de_passe'],PASSWORD_DEFAULT   );
                //on crée un nouvel utilisateur
                inscription_utilisateur($_POST['client_mail'],$mdp,$_POST['client_nom'],$_POST['client_prenom'],$_POST['client_adr'],$_POST['client_cp'],$_POST['client_ville'],$_POST['client_pays'],$_POST['client_tel'],$_POST['client_date_naiss'],$_POST['client_genre']);
                //on crée une session pour l'utilisateur
                session_start();
                $_SESSION['client_nom']=$_POST['client_nom'];
                //on redirige l'utilisateur vers la page d'accueil
                header('Location: /');
                //echo 'utilisateur créé';
            }
            else
            {
                //si l'utilisateur existe déjà, on redirige l'utilisateur vers la page d'inscription
                session_start();
                $affichage_retour = 'utilisateur existe déjà';
                header('Location: /connexion/inscription');
                $_SESSION['information'] = $affichage_retour;
                //echo 'utilisateur existe déjà';
            }
        }
        else
        {
            //si les deux mots de passe ne sont pas identiques, on redirige l'utilisateur vers la page d'inscription
            session_start();
            $affichage_retour = 'mots de passe différents';
            header('Location: /connexion/inscription');
            $_SESSION['information'] = $affichage_retour;
            //echo 'mots de passe différents';
        }
    }
    else
    {
        //si les champs ne sont pas remplis, on redirige l'utilisateur vers la page d'inscription
        session_start();
        $affichage_retour = 'champs non remplis';
        header('Location: /connexion/inscription');
        $_SESSION['information'] = $affichage_retour;
        //echo 'champs non remplis';
    }
}

function deconnexion() {
    session_start();
    session_destroy();
    header('Location: /');
}