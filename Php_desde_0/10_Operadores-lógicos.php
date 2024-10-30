<?php 
    if($_POST){
        $ValorA = $_POST['NumA'];
        $ValorB = $_POST['NumB'];

        // AND
        if( ( $ValorA != $ValorB ) && ( $ValorA > $ValorB ) ){
            echo  "El valor de A es diferente, q el de B. Y tambien es  mayor";
        }

        // OR
        if( ( $ValorA != $ValorB ) || ( $ValorA > $ValorB ) ){
            echo  "El valor de A es diferente, q el de B. Y tambien es  mayor";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="10_Operadores-lógicos.php" method="post">
        Valor A:
        <input type="text" name="NumA" id="">
        <br>
        Valor B:
        <input type="text" name="NumB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>