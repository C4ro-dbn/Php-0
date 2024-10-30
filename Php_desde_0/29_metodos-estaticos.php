<?php 
    class persona{
        public static function datos(){
            echo "Hola, estoy creando metodos estaticos";
        }
    }
    $Per = new persona();
    $Per->datos();

    // accediendo al metodo estatico
    persona::datos();
?>