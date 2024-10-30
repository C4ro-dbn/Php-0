<?php
    $Frutas = array("Durazno","Melon","Fresa","Uva");
    print_r($Frutas);  
    // Accediendo al indice x de las frutas
    echo $Frutas[1]."<br/>";

    // Recorriendo el array, y imprimiendolo en lista
    for($indice = 0; $indice < 4; $indice++){
        echo $Frutas[$indice]."<br/>";
    }
?>