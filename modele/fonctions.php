<?php
session_start() ;

/**
 * @author Salim 
 * @return les vols
 */
function getLesVols()
{ 
    
 $vols = array();

 require dirname(__FILE__). "/Connect.php";
 
 if ($connexion)
{
  // connexion r�ussie
  mysql_select_db("gestionvols",$connexion);
  $requete="select * from vols ";

  
  $resultat= mysql_query($requete,$connexion);

  while($ligne=mysql_fetch_array($resultat))
                {
    
            $vols[] = $ligne;
         
                    }
                
}
else
{
  //echo "problème à la connexion <br />";
}
mysql_close($connexion);
 
 
return ($vols);

}


function reserverVol() {
    // r�cup num�ro vol
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


function creerReservations($reservation) {

  //  $lesReservations = getLesReservationsDuPanier();

    // le nom du fichier Xml
   require dirname(__FILE__). "/Connect.php";
    // ouverture du fichier en �criture (mode w)


   if ($connexion)
{
  // connexion r�ussie
  mysql_select_db("gestionvols",$connexion);

    // ensuite on fait une boucle qui parcours les r�servations
    
              
      $requete="insert into reservation values('','$reservation[numero]','".htmlspecialchars($reservation['nom'])."','".htmlspecialchars($reservation['prenom'])."','".htmlspecialchars($reservation['adresse'])."','".htmlspecialchars($reservation['mail'])."',$reservation[nbVoyageurs])";  
        
    //  echo $requete ;
      
      $ok= mysql_query($requete,$connexion);
 
     /* 
      if ($ok)
  {
    echo "L'utilisateur a �t� correctement ajout�";
  }
  else
  {
    echo "Attention, l'ajout de l'utilisateur a �chou� !!!";
  }
      
  */ 
    
}
else
{
 // echo "probl�me � la connexion <br />";
}
mysql_close($connexion);
 
 


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
    return $_SESSION['reservations'][$numReservation];
}



	



?>