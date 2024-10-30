<?php 
    $cFut = "";
    $cBask = "";
    $cTen = "";

    if($_POST){
        $cFut = (isset($_POST['cFut'])=="si")?"checked":"";
        $cBask = (isset($_POST['cBask'])=="si")?"checked":"";
        $cTen = (isset($_POST['cTen'])=="si")?"checked":"";
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
    <form action="36_Valores-input-checkbox.php" method="post">
        Estas apreniendo... 
        <br> Futbol: <input type="checkbox" <?php echo $cFut; ?> value="si " name="cFut" id="">
        <br> Basketball: <input type="checkbox" <?php echo $cBask; ?> value="si" name="cBask" id="">
        <br> Tenis: <input type="checkbox" <?php echo $cTen; ?> value="si" name="cTen" id="">
        
        <br> <input type="submit" value="Enviar">
    </form>
</body>
</html>