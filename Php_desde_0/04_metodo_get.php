<?php 
    // Se recepciona la informacin enviada del formulario, atra vez de la url
    if($_GET){
        // Recepcion de los datos
        $Nombre = $_GET["Nombre"];
        echo("Bienvenido ". $Nombre);
    }
?>