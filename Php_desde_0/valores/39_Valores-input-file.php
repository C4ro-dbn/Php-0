<?php 
    if($_POST){
        print_r ($_FILES['archivo']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input File</title>
</head>
<body>
    <form action="39_Valores-input-file.php" enctype="multipart/form-data" method="post">
        Imagen:
        <input type="file" name="archivo" id="">
        <br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>