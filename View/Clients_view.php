<div id="contenu">
    <h1>Jeux</h1>
    <p>Voici le liste des clients sur le site :</p>
    <table>
        <tr>
            <th>Code</th>
            <th>Genre</th>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Code postale</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>N° de téléphone</th>
            <th>Date de naissance</th>
            <th>Email</th>
            <th>Mot de passe</th>
        </tr>
        <?php
        foreach($clients as $client) {
            echo '<tr>';
            echo '<td>' . $client['client_code'] . '</td>';
            echo '<td>' . $client['client_genre'] . '</td>';
            echo '<td>' . $client['client_prenom'] . '</td>';
            echo '<td>' . $client['client_nom'] . '</td>';
            echo '<td>' . $client['client_adr'] . '</td>';
            echo '<td>' . $client['client_cp'] . '</td>';
            echo '<td>' . $client['client_ville'] . '</td>';
            echo '<td>' . $client['client_pays'] . '</td>';
            echo '<td>' . $client['client_tel'] . '</td>';
            echo '<td>' . $client['client_date_naiss'] . '</td>';
            echo '<td>' . $client['client_email'] . '</td>';
            echo '<td>' . $client['client_mdp'] . '</td>';
            echo '</tr>';
        }
        ?>
    </table>
    <div class="remarque"></div>
</div>