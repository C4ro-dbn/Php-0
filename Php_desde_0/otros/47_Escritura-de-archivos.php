<?php 
    $Nomarchivo = "../otros/47_Escritura-de-archivos.txt";
    $Contenido = "Lorem ipsum dolor sit amet, consectet";
    $CrearArchivo = fopen($Nomarchivo,"w");
    fwrite($CrearArchivo,$Contenido);
    fclose($CrearArchivo); 
?>