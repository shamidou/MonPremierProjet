

<?php 


if(!isset($_REQUEST['action']))
{ $action = 'accueil';}
else
{ $action = $_REQUEST['action'];}

//if ($action != "pdfReservation") {
    include("vues/v_entete.php") ;
//}

switch ($action)
{
    
        case 'accueil':
           
            // Inclusion de l'en-t?te
       include("vues/v_accueil.php");
            
     //  echo  " <script>inclureFichier('v_accueil.php')</script> ";     
            
         break ;
            
                case 'voirVols' :
        
        include dirname(__FILE__)."/modele/fonctionsPDO.php";
        $lesVols = getLesVols();
        
        
        include("vues/v_vols.php");
        break;
    
    case 'reserver' :
        include dirname(__FILE__)."/modele/fonctionsPDO.php";
        $numero = reserverVol();
        include("vues/v_formulaireReservation.php");
        break;
    
    case 'validerReservation' :
        
        
        include dirname(__FILE__)."/modele/fonctionsPDO.php";
       // echo "réservation valid?e" ;
       $reservation = validerReservation() ;
       
        $numero = $reservation['numero'] ;
       
        $nom = $reservation['nom'] ;
       
        $prenom= $reservation['prenom'] ;
    
 echo  " <script>afficherTexte('$numero','$nom','$prenom')</script> ";  
       
  
     // include("vues/v_confirmeReservation.php");
        break;
    
    case 'voirReservations' :
         include dirname(__FILE__)."/modele/fonctionsPDO.php";
        $lesReservations = getLesReservations();
      
        include("vues/v_reservations.php");
        break;

 case 'pdfReservation' :
        include dirname(__FILE__)."/modele/fonctionsPDO.php";
        $reservation = getLaReservation();
       
        include("vues/pdf_reservation.php");
        
        $res = creerPdfReservation($reservation) ;
        break;





case 'suppReservation' :
        include dirname(__FILE__)."/modele/fonctionsPDO.php";
        $numReservation = getLeNumReservation();       
       suppPanier($numReservation) ;
        $lesReservations = getLesReservations();
       include("vues/v_reservations.php");
        break;

}
// vue qui cr?e le pied de page

if ($action != "pdfReservation") {
include("vues/v_pied.php") ;
}
?>

