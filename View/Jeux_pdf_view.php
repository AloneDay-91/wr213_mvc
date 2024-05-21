<?php

//on utilise la classe FPDF pour générer un fichier PDF
$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();
// Première page

//setFont : police Arial, en gras, 20
$pdf->SetFont('Arial','B',20);

// on écrit un titre
$pdf->Cell(50,10,iconv('UTF-8', 'iso-8859-1','Catalogue des jeux'));
$pdf->ln(30);


foreach ($jeux as $jeu) {
    $pdf->Cell(1,10,iconv('UTF-8', 'iso-8859-1',$jeu['jeu_nom']));
    $pdf->Cell(1,30,iconv('UTF-8', 'iso-8859-1',$jeu['jeu_editeur']));
    $pdf->ln(50);
    $pdf->Image('View/'.$jeu['jeu_photo1'], 100, 30, 100);

}

// on saute une ligne
$pdf->ln(50);

// on envoie le PDF
$pdf->Output();
?>