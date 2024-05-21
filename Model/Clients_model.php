<?php
function getClients()
{
    $clients = json_decode(file_get_contents('Data/clients.json'), true);
    return $clients;
}
?>