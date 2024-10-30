<?php 
    $rdg = "";
    if($_POST){
        $rdg = (isset($_POST['deporte']))?$_POST['deporte']:"";
    }
    print_r ($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>valores input radio</title>
</head>
<body>
    <form action="35_Valores-input-radio.php" method="post">
        ¿Te gusta el deporte?
        <br> Futbol: <input type="radio" <?php echo ($rdg=="Futbol")?"checked":""; ?> name="deporte" value="Futbol" id="">
        <br> Basketball: <input type="radio" <?php echo ($rdg=="Basketball")?"checked":""; ?> name="deporte" value="Basketball" id="">
        <br> Tenis: <input type="radio" <?php echo ($rdg=="Tenis")?"checked":""; ?> name="deporte" value="Tenis" id="">
        <br> <input type="submit" value="Enviar">
    </form>
</body>
</html>