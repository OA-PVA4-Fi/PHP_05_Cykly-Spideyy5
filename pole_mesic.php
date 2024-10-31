<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni
$months = array("Leden", "Únor", "Brezen", "Duben", "Květen", "Cerven", "Cervenec", "Srpen", "Zari", "Rijen", "Listopad", "Prosinec");

foreach ($months as $hodnota) {
    echo $hodnota .'<br />';
}

for ($i = 5; $i <= 11; $i++) {
    echo '<br />'. $months[$i] .'<br />';
}
    

?>



