<?php 
    session_start();

    $_SESSION["usuario"] = "Dubancho";
    $_SESSION["estatus"] = "Online";

    echo "Sesion Iniciada"."<br/>";
    echo "usuario:" .  $_SESSION["usuario"] = "Dubancho" . " - ". "Estado: " . $_SESSION["estatus"] = "Online";

?>