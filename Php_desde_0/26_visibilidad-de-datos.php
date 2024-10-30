<?php 
    // Las clases, son para todo lo q va oriento a objetos
    class persona{
        // Propiedades
        public $Nombre;
        private $Edad;
        protected $Altura;

        // Creacion de metodos
        public function asignar($nuevoNombre){
            $this -> Nombre = $nuevoNombre;
        }

        public function imprimir(){
            echo "Hola, que tal " . $this -> Nombre ."<br/>";
        }

        public function mostrarEdad(){
            $this->Edad = 22;
            return $this->Edad;
        }

    }

    // Crear Obejto (instancia)
    $Alumno = new persona();
    $Alumno_2 = new persona();

    // Llamando el metodo
    $Alumno->asignar("Duban");
    $Alumno_2->asignar("Felipe");
    $Alumno_2->imprimir();

    // Imprimir la propiedad
    echo $Alumno->Nombre."<br/>";
    echo $Alumno_2->Nombre."<br/>";
    echo $Alumno_2->mostrarEdad();
?>