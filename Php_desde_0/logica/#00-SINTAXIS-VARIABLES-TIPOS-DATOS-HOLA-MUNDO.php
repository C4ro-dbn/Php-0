<?php 

/*
 * EJERCICIO:
 * - Crea un comentario en el código y coloca la URL del sitio web oficial del
 *   lenguaje de programación que has seleccionado.
*/

    // https://www.php.net/manual/es/ 

/*
 * - Representa las diferentes sintaxis que existen de crear comentarios
 *   en el lenguaje (en una línea, varias...).   
*/

    /** comentario en bloque */ 
    //comentario en linea

/*
 * - Crea una variable (y una constante si el lenguaje lo soporta).
*/

    /*las constantes definidas mediante define() pueden depender de variables del programa, que se evalúan cuando se ejecuta el programa, pero las constantes definidas mediante const no. */
    $valor = 40;
    define('TT', $valor);
    echo $valor." ";
 
/*
 * - Crea variables representando todos los tipos de datos primitivos
    del lenguaje (cadenas de texto, enteros, booleanos...).
*/

    $nomrbe = "Duban";;
    $edad = 22;
    $dinero = 1.700;
    echo $nomrbe." ".$edad." ".$dinero;


/*
 * - Imprime por terminal el texto: "¡Hola, [y el nombre de tu lenguaje]!"
*/

    $lenguaje = "PHP";
    echo " ".$lenguaje." ";

/*
 * ¿Fácil? No te preocupes, recuerda que esta es una ruta de estudio y
    debemos comenzar por el principio.
*/

?>