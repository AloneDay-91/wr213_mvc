<div id="contenu">
    <h1>Jeux</h1>
    <p>Voici le liste des jeux disponibles sur le site :</p>
    <table>
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Editeur</th>
            <th>Photo1</th>
            <th>Photo2</th>
        </tr>
        <?php
        foreach($jeux as $jeu) {
            echo '<tr>';
            echo '<ul>';
            echo '<td>' . $jeu['jeu_code'] . '</td>';
            echo '<td>' . $jeu['jeu_nom'] . '</td>';
            echo '<td>' . $jeu['jeu_editeur'] . '</td>';
            echo '<td><img width="100px" height="100px" src="/View/' . $jeu['jeu_photo1'] . '" alt="photo1" /></td>';
            echo '<td><img width="100px" height="100px" src="/View/' . $jeu['jeu_photo2'] . '" alt="photo2" /></td>';
            if (isset($_SESSION['client_nom'])) {
                echo '<td> <a style="color: red;" href="/panier/ajouter_produit_panier/'. $jeu['jeu_code'] .'">Ajouter au panier</a></td>';
            }
            echo '</ul>';
            echo '</tr>';
        }
        ?>
    </table>
    <div class="remarque"></div>
</div>