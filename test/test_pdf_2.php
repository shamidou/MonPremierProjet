<?php
// permet d'inclure la biblioth�que fpdf
require(dirname(__FILE__) . '/../fpdf/fpdf.php');

// instancie un objet de type FPDF qui permet de cr�er le PDF
$pdf=new FPDF();
// ajoute une page
$pdf->AddPage();

//
$pdf->Image('../images/avion1.jpg',5,5, 30,30);

$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();$pdf->ln();
$pdf->Cell(40,10,'');

// d�finit la police courante
$pdf->SetFont('Arial','B',16);
// affiche du texte
$pdf->Cell(40,10,'Voici un Pdf !');

//$pdf->Ln(80);
$pdf->Cell(40,10,'Un autre texte !');
// Enfin, le document est termin� et envoy� au navigateur gr�ce � Output().
$pdf->Output();
?>