<?php

/*
 * EJERCICIO:
 * - Crea ejemplos utilizando todos los tipos de operadores de tu lenguaje:
 *   Aritméticos, lógicos, de comparación, asignación, identidad, pertenencia, bits...
 *   (Ten en cuenta que cada lenguaje puede poseer unos diferentes)
*/
    //Operadores aritmetico
    $num_1 = 8;
    $num_2 = 7;
    $num_3 = 6;
    $num_4 = 9;

    $result = $num_1 + $num_2;
    echo "\n"."+: ".$result."\n";

    $result2 = $num_1 - $num_2;
    echo "\n"."-: ".$result2."\n";

    $result3 = $num_1 * $num_2;
    echo "\n"."*: ".$result3."\n";

    $result4 = $num_1 / $num_2;
    echo "\n"."/: ".$result4."\n";

    //Estructura condicional if

    if ($num_1 > $num_2){
        echo " "."El número ".$num_1." en mayor q el numero ".$num_2."\n";
    }

    if ($num_3 < $num_4){
        echo " "."El número ".$num_4." en menor q el numero ".$num_3."\n";
    }

/* 
 * - Utilizando las operaciones con operadores que tú quieras, crea ejemplos
 *   que representen todos los tipos de estructuras de control que existan
 *   en tu lenguaje:
 *   Condicionales, iterativas, excepciones...
 * - Debes hacer print por consola del resultado de todos los ejemplos.
*/ 

    // operador de desigualdad
    $val_1 = 3;
    $val_2 = 7;

    if ($val_1 != $val_2){
        echo " "."El valor de número " . $val_1 . "es diferente " . $val_2 . "\n";
    }
    

/*
 * DIFICULTAD EXTRA (opcional):
 * Crea un programa que imprima por consola todos los números comprendidos
 * entre 10 y 55 (incluidos), pares, y que no son ni el 16 ni múltiplos de 3.
*/ 

    for($i=10; $i <=55; $i++){
        if(($i %3!=0)&&($i!=16)&&($i %2==0)){
            echo $i." ";
        }
    }

 /*
 * Seguro que al revisar detenidamente las posibilidades has descubierto algo nuevo.
*/

?>