<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }
</style>
<p>formualaire d'inscription</p>
<?php
if (isset($_SESSION['information'])) {
    echo '<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
  '.$_SESSION['information'].'
</div>' . "\n";
    session_unset();
}
?>
<style>
    .alert {
        padding: 20px;
        background-color: #f44336; /* Red */
        color: white;
        margin-bottom: 15px;
        z-index: 90;
        position: absolute;
        bottom: 0;
        right: 0;
    }

    /* The close button */
    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    /* When moving the mouse over the close button */
    .closebtn:hover {
        color: black;
    }
</style>
<form action="/connexion/validation_inscription" method="post">
    <input type="text" name="client_nom" placeholder="nom">
    <input type="text" name="client_prenom" placeholder="prenom">
    <input type="email" name="client_mail" placeholder="email">
    <input type="password" name="mot_de_passe" placeholder="mot de passe">
    <input type="password" name="mot_de_passe2" placeholder="confirmer mot de passe">
    <input type="text" name="client_adr" placeholder="adresse">
    <input type="text" name="client_cp" placeholder="code postal">
    <input type="text" name="client_ville" placeholder="ville">
    <input type="text" name="client_pays" placeholder="pays">
    <input type="text" name="client_tel" placeholder="telephone">
    <input type="date" name="client_date_naiss" placeholder="date de naissance">
    <input type="text" name="client_genre" placeholder="genre">

    <input type="submit" value="inscription">
</form>
</body>
</html>