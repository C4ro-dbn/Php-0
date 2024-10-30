<?php 
    // La condicion de if, pregunta si se ha enviado el dato imprima el nombre,
    // de lo contrario no hacer nd
    // Oculta los datos enviados atra vez de la url
    if($_POST){

    // Recepcion de datos del formulario HTML
    $Nombre = $_POST['Nombre'];

    // Imprime los datos optenidos del campo txtNombre
    // Para concatenar datos, se utiliza el punto
    echo " Hola ".$Nombre;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST - Php</title>
</head>
<body>
    <form action="03_metodo_post.php" method="post">
        Nombre: 
        <input type="text" name="Nombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>