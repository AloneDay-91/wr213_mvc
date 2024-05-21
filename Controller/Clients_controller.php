<?php

require('Model/Clients_model.php');

function index() {
    $clients = getClients();
    require('View/autres_pages/header.php');
    require('View/autres_pages/menu.php');

    require('View/Clients_view.php');

    require('View/autres_pages/footer.php');
}

?>