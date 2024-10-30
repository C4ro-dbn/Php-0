<?php 
    $Server = "localhost";
    $User = "root";
    $Password = "";

    try{
        $Connexion = new PDO("mysql:host = $Server; dbname = crud_php_desde_cero", $User, $Password); // Conexion con el servidor
        $Connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   // Propiedades de acceso pa los errores
        echo "Conexion establecida con el servidor.";
    }catch(PDOException $Error){
        echo "Conexion fallida con el servidor..." . $Error;
    }
?> 