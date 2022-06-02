<?php
/*Clase  ---  plantilla*/

Class persona{
    public $nombre; //propiedades
    
    public function asignarnombre($nuevonombre){ //aaciones o metodos
        $this->nombre=$nuevonombre;
    }
    public function imprimirnombre(){
        echo "Hola mi nombre es ".$this->nombre;

    }
   
}
Class trabajador extends persona{
    public $puesto; // propiedad nueva

    public function presentarEmpleado(){
        echo "hola mi nombre es ".$this->nombre." y mi puesto es de ".$this->puesto;
    }
}

$objempleado= new trabajador();
$objempleado->asignarnombre("Maigualida");
$objempleado->puesto="desarrolladora de software";

$objempleado->presentarEmpleado();


?>
