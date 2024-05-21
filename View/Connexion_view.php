<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
<p>formualaire de connexion</p>
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
<form action="/connexion/verif_connexion" method="post">
    <input type="email" name="client_mail" placeholder="email">
    <input type="password" name="mot_de_passe" placeholder="mot de passe">
    <input type="submit" value="connexion">
</form>
</body>
</html>