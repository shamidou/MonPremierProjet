<?php

/// Juste pour voir comment fonctionne ma fonction de récupération des vols que je vais tester

/* function getLesVols()
{ 
    
 $vols = array();

 require dirname(__FILE__). "/Connect.php";
 
 if ($connexion)
{
  // connexion réussie
  mysql_select_db("gestion de vols",$connexion);
  $requete="select * from vols ";

  
  $resultat= mysql_query($requete,$connexion);

  while($ligne=mysql_fetch_array($resultat))
                {
    
   $unVol = array();
           $unVol['numero'] = $ligne["numero"];
            $unVol['depart'] = $ligne["depart"];
            $unVol['arrivee'] = $ligne["arrivee"];
            $unVol['dateDepart'] = $ligne["dateDepart"];
            $unVol['dateArrivee'] = $ligne["dateArrivee"];
            $unVol['prix'] = $ligne["prix"];
            $unVol['places'] = $ligne["places"];
            
           // var_dump($unVol);
            echo ("\n");
          //    var_dump($ligne); 
            
            
            $vols[] = $unVol;
         
        
		}
                
}
else
{
  //echo "problème à la connexion <br />";
}
mysql_close($connexion);
 
 
return ($vols);

}

*/





class VolsTest  extends PHPUnit_Framework_TestCase
 {

    
    

 public function testAdd()

   {
           
     include("../modele/fonctions.php") ; 
     
    
         
            $lesVolsTest = array('0' => array(
                                "numero" => "AIR5007",
                                "depart" => "Paris CDG - France",
                                "arrivee" => "Dakar - Senegal",
                                "dateDepart" => "2011-12-16",
                                "dateArrivee" => "2011-12-16",
                                "prix" => "526",
                                "places" => "311"),
                            '1' => array(
                                "numero" => "AIR5108",
                                "depart" => "PARIS ORY - France",
                                "arrivee" => "MADRID - Espagne",
                                "dateDepart" => "2011-01-01",
                                "dateArrivee" => "2011-01-01",
                                "prix" => "250",
                                "places" => "130")
                    )
                    ;
            
            $this->assertEquals($lesVolsTest, getLesVols());
    }
     




  

}
?>