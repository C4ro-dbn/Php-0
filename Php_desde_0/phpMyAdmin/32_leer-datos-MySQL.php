<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud_php_desde_cero";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password); // Conexion con el servidor

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Establece el modo de error PDO en excepción

        // Listar o leer los datos de la tabla de fotos
        $sql = "SELECT * FROM fotos";
        $sentence = $conn->prepare($sql);
        $sentence->execute();
        $res = $sentence->fetchAll(); // Devuelve el resultado
        
        // print_r($res); // Listando los datos en formato arreglo

        foreach($res as $foto){
            print_r ($foto); 
        }

        echo "Conexion establecida con el servidor.";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>