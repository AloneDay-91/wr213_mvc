<header>
    <img src="http://wr213.mmi-troyes.fr:8215/View/img/wr213_logo.png" alt="logo" id="logo"/>
    <nav>
        <a href="/accueil">Accueil</a>
        <a href="/jeux">Jeux</a>
        <a href="">Contact</a>
    </nav>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    if(isset($_SESSION['client_nom']))
    {
        echo '<div id="connexion">Bienvenue '.$_SESSION['client_nom'].' <a href="/connexion/deconnexion">Déconnexion</a>';
        echo '<a href="/panier/afficher_panier">Panier</a></div>';
    }
    else
    {
        echo '<div id="connexion"><a href="/connexion">Connexion</a>/<a href="/connexion/inscription">Inscription</a></div>';
    }
    ?>
</header>
