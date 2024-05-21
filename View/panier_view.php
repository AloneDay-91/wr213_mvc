<div>
    <br>
    <br>
    <h1>Panier</h1>
    <p>Vous trouverez ici tous les articles que vous avez achetés.</p>
</div>
<table>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Editeur</th>
        <th>Photo1</th>
        <th>Nombre</th>
        <th>Supprimer</th>
        <th>Ajouter un autre</th>
    </tr>

    <?php
    foreach($infos_produits as $produit) {
        echo '<tr>';
        echo '<td>' . $produit['jeu_code'] . '</td>';
        echo '<td>' . $produit['jeu_nom'] . '</td>';
        echo '<td>' . $produit['jeu_editeur'] . '</td>';
        echo '<td><img width="100px" height="100px" src="/View/' . $produit['jeu_photo1'] . '" /></td>';
        echo '<td>'. $panier[$produit['jeu_code']]['quantite'] .'</td>';
        echo '<td><a style="color: red;" href="/panier/ajouter_produit_panier/'. $produit['jeu_code'] .'">Ajouter un autre</a></td>';
        echo '<td><a style="color: red;" href="/panier/supprimer_produit_panier/'. $produit['jeu_code'] .'">Supprimer</a></td>';
        echo '</tr>';
    }
    ?>
    <div class="remarque"></div>
    <a style="color: red;" href="/">Retour à l'accueil</a>
</table>
