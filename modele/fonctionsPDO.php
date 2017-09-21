<?php
session_start() ;

function getLesVols()
{ 

include "connectPDO.php" ;


try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec('SET NAMES utf8');
    $vols = array();

$reponse = $dbh->query("SELECT * from vols");
While($ligne=$reponse->fetch() )
{
$vols[] = $ligne;
}
$reponse->closeCursor();

 
return ($vols);
} 

catch (PDOException $e) {
   
    echo 'Échec lors de la connexion : ' . $e->getMessage();

}
 

}


function reserverVol() {
    // récup numéro vol
    $numero = $_REQUEST["numero"];
    return $numero;
}




function validerReservation()
{
    
$reservation = array();
	// récup�ration du num�ro
$numero = $_REQUEST["numero"];
$reservation["numero"] =  $numero;
$nom =  $_REQUEST["nom"];
$reservation["nom"] =  $nom;
$prenom = $_REQUEST["prenom"];
$reservation["prenom"] =  $prenom;
$adresse =  $_REQUEST["adresse"];
$reservation["adresse"] =  $adresse;
$mail=  $_REQUEST["mail"];
$reservation["mail"] =  $mail;

$nbVoyageurs=  $_REQUEST["nbVoyageurs"];
$reservation["nbVoyageurs"] =  $nbVoyageurs;

initPanier() ;

ajouterAuPanier($reservation);

creerReservations($reservation) ;



return $reservation ;   
    
}

function initPanier() {
    if(!isset($_SESSION['reservations']))
	$_SESSION['reservations']= array();
}

function ajouterAuPanier($reservation) {    
    $_SESSION['reservations'][]= $reservation;
    
  }


function suppPanier($numReservation) {    
    unset($_SESSION['reservations'][$numReservation]);
    
   $_SESSION['reservations'] = array_values($_SESSION['reservations']) ;
    
  }  
  
  
function creerReservations($reservation) {

  //  $lesReservations = getLesReservationsDuPanier();

    // le nom du fichier Xml
   require dirname(__FILE__). "/ConnectPDO.php";
    // ouverture du fichier en �criture (mode w)
try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec('SET NAMES utf8');
   


 

    // ensuite on fait une boucle qui parcours les r�servations
    
              
   $requete="insert into reservation(`No`, `numero`, `nom`, `prenom`, `adresse`, `mail`, `nbVoyageurs`) values(null,'$reservation[numero]','".htmlspecialchars($reservation['nom'])."','".htmlspecialchars($reservation['prenom'])."','".htmlspecialchars($reservation['adresse'])."','".htmlspecialchars($reservation['mail'])."',$reservation[nbVoyageurs])";  
   
   echo $requete ;
   
   $reponse = $dbh->exec($requete);
      
   

} 

catch (PDOException $e) {
   
    echo 'Échec lors de la connexion : ' . $e->getMessage();

}
 


}    
   


// fonctions de gestion du panier
// le panier est un tableau index� mis en session avec la cl� "reservations"

// fonction qui initialise le panier


// fonction qui ajoute une r�servation au panier


function getLesReservations() {
    
    $lesReservations = getLesReservationsDuPanier();
    
   
    
      return $lesReservations;
}


function getLesReservationsDuPanier()
{
	
    
    if (isset($_SESSION['reservations']) && count($_SESSION['reservations']) !=0) {
            return $_SESSION['reservations'];
        }
        else {
            return null;
        }

        
}

function retirerDuPanier($idProduit)
{
// TODO
//$index =array_search($idProduit,$_SESSION['produits']);
//unset($_SESSION['produits'][$index]);
}

function getLaReservation() {
    $numReservation = $_REQUEST["numReservation"];
    return ($_SESSION['reservations'][$numReservation]);
}


function getLeNumReservation() {
    $numReservation = $_REQUEST["numReservation"];
    return ($numReservation);
}

?>
