<?php

require('Model/Jeux_model.php');

function index() {
    $jeux = getJeux();
    require('View/autres_pages/header.php');
    require('View/autres_pages/menu.php');

    require('View/Jeux_view.php');

    require('View/autres_pages/footer.php');
}

function jeux_pdf() {
    $jeux = getJeux();
    require('Vendors/fpdf/fpdf.php');
    require('View/Jeux_pdf_view.php');
}

?>