<?php 
    $vg = "";

    if($_POST){
        $vg = (isset($_POST['vg']))?$_POST['vg']:"";
    }

    print_r ($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valores input checkbox</title>
</head>
<body>
    <form action="37_Valores-select-option.php" method="post">
        ¿Que videojuegos te gustan?
        <br>
        <select name="vg" id="">
            <option value="">[Ninguno]</option>
            <option value="cs2" <?php echo ($vg=="cs2")?"selected":""; ?> >Counter Strike 2</option>
            <option value="dbd"<?php echo ($vg=="dbd")?"selected":""; ?> >Dead By Daylight</option>
            <option value="gta"<?php echo ($vg=="gta")?"selected":""; ?> >GTA V</option>
            <option value="ea"<?php echo ($vg=="ea")?"selected":""; ?> >EA FC 24</option>
        </select>
        <br> <input type="submit" value="Enviar">
    </form>
</body>
</html>