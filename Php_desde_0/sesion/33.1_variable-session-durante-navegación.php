<?php 
    session_start(); // Mntiene abieta la variable sesion en todas la hojas q sea necesario
    // echo "usuario:" .  $_SESSION["usuario"] = "Dubancho" . " - ". "Estado: " . $_SESSION["estatus"] = "Online";

    if( isset($_SESSION["usuario"]) ){
        echo "usuario:" .  $_SESSION["usuario"] = "Dubancho" . " - ". "Estado: " . $_SESSION["estatus"] = "Online";
    }else{
        echo "No hay datos";
    }
?>