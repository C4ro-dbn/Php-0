<?php
    $Frutas = array("Durazno","Melon","Fresa","Uva");
    print_r($Frutas);  
    // Accediendo al indice x de las frutas
    echo $Frutas[1]."<br/>";

    foreach($Frutas as $indice => &$valor){
        echo $Frutas[$indice]."<br/>";
    }
?>