
<div id="contenu">
<?php
foreach($lesVols as $unVol)
{
	$numero = $unVol['numero'] ;
        echo "vol <b>$numero</b> <br>";
        echo "départ : ".$unVol['depart']." - ".$unVol['dateDepart']."<br>";
       $a =  utf8_encode($unVol['dateArrivee']);
        echo "arrivée : ".$unVol['arrivee']." - $a <br>";
        echo "<b>prix ".$unVol['prix']."</b>";

   echo ' - <a href="index.php?action=reserver&numero='. $numero .'">réserver</a><br><br>';
        
 
}
?>
</div>

