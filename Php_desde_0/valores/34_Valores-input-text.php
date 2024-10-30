<?php 
    $Nombre = "";
    if($_POST){
        // La finalidad es.. si hay algo en la variable Nombre colocalo, de lo contrario se deja en blanco
        $Nombre = (isset($_POST['Nombre']))?$_POST['Nombre']:"";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valores input text</title>
</head>
<body>
    <form action="34_Valores-input-text.php" method="post">
        <!-- Colocando la variable nombre en el value, lo consevamos en el formulario -->
        <input value="<?php $Nombre ?>" type="text" name="Nombre" id="">
        <input type="submit" value="Enviar">
    </form>

    <strong>
        <?php if($_POST) {?>
            Hola 
            <?php 
                echo " $Nombre ";
            ?>
        <?php } ?>
    </strong>
</body>
</html>