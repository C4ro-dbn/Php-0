<?php 
    if($_POST){
        $boton = $_POST['btn'];
        switch($boton){
            case 1:
                echo "Presiono el boton 1";
                break;
            case 2:
                echo "Presiono el boton 2";
                break;
            case 3:
                echo "Presiono el boton 3";
                break;
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="13_switch.php" method="post">
        <input type="submit" name="btn" value="1">
        <input type="submit" name="btn" value="2">
        <input type="submit" name="btn" value="3">
    </form>
</body>
</html>