<?php 
    // la funcion encode trnasforme los arrays y los convierte en json
    $personas = array("Duban"=>22, "Felipe"=>21,"Aaron"=>23);
    echo json_encode($personas);
?>