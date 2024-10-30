<?php 
    // Las clases, son para todo lo q va oriento a objetos
    class persona{
        // Propiedades
        public $Nombre;

        // Creacion de constructor
        function __construct($nuevoNombre) {
            $this -> Nombre = $nuevoNombre;
        }

        // Creacion de metodos
        public function asignar($nuevoNombre){
            $this -> Nombre = $nuevoNombre;
        }

        public function imprimir(){
            echo "Hola, que tal " . $this -> Nombre ."<br/>";
        }

    }

    // Crear Obejto (instancia)
    $Alumno = new persona("Duban");

    // Llamando el metodo asignar
    // $Alumno->asignar("Duban");

    // Imprimiendo los datos del metodo
    $Alumno->imprimir();
?>