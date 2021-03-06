<?php

function creerPdfReservation($reservation) {

    // permet d'inclure la biblioth�que fpdf
    require(dirname(__FILE__) . '/../fpdf/fpdf.php');

    // instancie un objet de type FPDF qui permet de créer le PDF
    $pdf=new FPDF();
    // ajoute une page
    $pdf->AddPage();

    // image
    $pdf->Image(dirname(__FILE__) . '/../images/avion2.jpg',10,10, 64, 48);
    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(40,10,'AIR ALLIANCE ');
    // d�finit la police courante
    
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(50);
    $pdf->Cell(40,10,utf8_decode('Réservation'));
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(40,10,'Client : ' . $reservation['prenom'] . " " . $reservation['nom']);
    $pdf->Ln(10);
    $pdf->Cell(40,10,utf8_decode('Vol numéro : ') . $reservation['numero']);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Nombre de passagers : ' . $reservation['nbVoyageurs'] );
ob_end_clean();
    // Enfin, le document est termin� et envoy� au navigateur gr�ce � Output().
    $pdf->Output();
    
}

?>