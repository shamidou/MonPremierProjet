<div id = "contenu">
   
    
    
         <form action="index.php?action=validerReservation" method="post">
     
         <input type="hidden" name="numero" value=<?php echo $numero ?> />
         <fieldset>  
          <legend>Réservation du vol n° <?php echo $numero ?></legend>
         <p>
         <label for='nom'>Nom *</label>
               <input type="text" name="nom" value=""  required/><br>
         </p>
           
         <p>
              <label for='prenom'>Prénom *</label>
                <input type="text" name="prenom" value="" required /><br>          
         </p>     
                
          <p>    
              <label for='adresse'>Adresse *</label>
                <input type="text" name="adresse" value="" required /><br>
          </p> 
           
          <p>  
              <label for='mail'>Mail *</label>
                <input type="email" name="mail" value="" required /><br>
          </p>   
           
          <p>
                <label for='nbVoyageurs'>Nombre de voyageurs *</label>
                <input type="text" name="nbVoyageurs" value="1" required /><br>
          </p>
          </br>
          <p>     
                <input type="submit" value="Valider" name="Valider"/>
<input type="reset" value="Annuler" name="Annuler" />
          </p>
         </fieldset>
          </form>
</div>