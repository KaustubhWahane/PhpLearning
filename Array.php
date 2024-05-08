<?php
$anime = array("Luffy","Zoro","Sanji") ;
// array_push($anime, "Nami");

// array_shift($anime);   
array_unshift($anime);   


foreach($anime as $anim){
    echo $anim . "\n";
}