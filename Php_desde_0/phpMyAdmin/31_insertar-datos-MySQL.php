<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud_php_desde_cero";

    try {
        $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password); // Conexion con el servidor

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// Establece el modo de error PDO en excepción

        // Insertar datos en la tabla de fotos
        $sql = "INSERT INTO fotos (Foto_Id, Foto_Nombre, Foto_RutaArch)
        VALUES (NULL, 'arboles', 'arboles.jpg')";
        
        // usar exec() porque no devuelve resultados
        $conn->exec($sql);
        echo "Conexion establecida con el servidor.";
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
?>