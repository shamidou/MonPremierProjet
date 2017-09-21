
    
function  afficherTexte(x,y,z) {
        
        
        
     $("#contenu").load("vues/v_confirmeReservation.php",
 
{"numero" : x , "nom"  : y , "prenom"  : z}

)   ;
       
   }
    
    
function  inclureFichier(fichier) {
        
        
        
     $("#contenu").load("vues/"+fichier)   ;
       
   }
    



    