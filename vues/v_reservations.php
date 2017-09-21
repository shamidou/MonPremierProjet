


<title> Liste des réservations </title>
<div id="contenu">
<table border="1" style="text-align:center">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Numéro de Vol</th>
            <th>Nombre de Places</th>
            <th>Pdf</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        
 <?php
 
 if($lesReservations!=null)
 
 {
 $i=0;

 for($i=0;$i<=count($lesReservations)-1;$i++)
{  
  
   
  echo   '<tr>' ;
      echo     '<td>'.$lesReservations[$i]['nom'].'</td>' ;
    echo       '<td>'.$lesReservations[$i]['prenom'].'</td>' ;
    echo       '<td>'.$lesReservations[$i]['numero'].'</td>' ;
    echo       '<td>'.$lesReservations[$i]['nbVoyageurs'].'</td>' ;
   echo  "<td><a href = index.php?action=pdfReservation&numReservation=$i> <img src = 'images/pdf_icon.gif' border = '0'></a></td>" ;
    echo  "<td><a href = index.php?action=suppReservation&numReservation=$i> <img src = 'images/supprimer-icone.png' border = '0'></a></td>" ;
    
   
   echo         '</tr>' ;
    
  

} 


 }

 ?>
    </tbody>
</table>
