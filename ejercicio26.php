<?php
//CONSTRUCTOR EN PHP
//Es aquello que se ejecuta al crear un objeto
Class persona{
    public $nombre; //propiedades

    function __construct($NuevoNombre){
        $this->nombre=$NuevoNombre;
    }

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

$objempleado= new persona("mi nombre es mai");
$objempleado->imprimirnombre();


?>
