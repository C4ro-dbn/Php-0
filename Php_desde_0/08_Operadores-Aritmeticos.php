<?php 
    if($_POST){
        $ValorA = $_POST['NumA'];
        $ValorB = $_POST['NumB'];

        // Operadores aritmeticos

        $TT_S = $ValorA + $ValorB;
        $TT_R = $ValorA - $ValorB;
        $TT_M = $ValorA * $ValorB;
        $TT_D = $ValorA / $ValorB;

        echo "SUMA: ".$TT_S." "."RESTA: ".$TT_R." "."MULTIPLICACION: ".$TT_M." "."DIVISION: ".$TT_D;
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
    <form action="08_Operadores-Aritmeticos.php" method="post">
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