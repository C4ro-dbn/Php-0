<?php 

    // Las clases, son para todo lo q va oriento a objetos
    class persona{
        // Propiedad
        public $Nombre;
        private $Edad;

        // Creacion de metodos o acciones
        public function asignar($nuevoNombre){
            $this -> Nombre = $nuevoNombre;
        }

        public function mostrarEdad(){
            $this->Edad = 22;
            return $this->Edad;
        }

    }

    // Reutilizacion 
    class Trabajador extends persona{
        public $Cargo; // Nueva propiedad
        public function imprimirDatosTrabajador(){
            echo "Hola, soy " . $this -> Nombre ."Tengo " . "Mi puesto de trabajo es ser " . $this -> Cargo;
        }
    }

    // Crear Obejto (instancia)
    $trabajador = new Trabajador(); // Creacion del objeto llamado trabajador
    $trabajador->asignar("Duban Caro "); // Llamando al metodo asignar
    $trabajador->Cargo = "Ingeniero de sistemas";
    $trabajador->imprimirDatosTrabajador();
?>