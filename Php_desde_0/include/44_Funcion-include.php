<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funció Include e Include once</title>
</head>

<body>
    
    <?php  include '../include/44-1_Funcion-include.php' ?>
    <!-- Cuando se provoque un error de digitacion, el codigo se sequira ejecutando -->

    <!-- inclide once -->
    <?php  include_once '../include/44-1_Funcion-include.php' ?>
    <?php  include_once '../include/44-1_Funcion-include.php' ?>
    <!-- Nos permite imprimir un solo documento, si es el caso de ser el mismo -->
</body>

</html>