<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcion Require e Require once</title>
</head>
<body>

    <?php require("../include/45-1_Funcion-require.php"); ?>
    <!-- Cuando se provoque un error de digitacion, el codigo no se ejecutara y botara error -->

    <!-- Require once -->
    <?php require_once("../include/45-1_Funcion-require.php"); ?>
    <?php require_once("../include/45-1_Funcion-require.php"); ?>
    <!-- Nos permite imprimir un solo documento, si es el caso de ser el mismo -->
</body>
</html>