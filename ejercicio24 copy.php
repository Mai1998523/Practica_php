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
$objAlumno=new persona(); //instancia o creacion de objeto
$objAlumno->asignarnombre("Maigualida"); //llamando un metodo
$objAlumno->imprimirnombre();

$objAlumno2=new persona();
$objAlumno2->asignarnombre("Lizet");
$objAlumno2->imprimirnombre();

//echo $objAlumno->nombre; //imprimir propiedad
//echo $objAlumno2->nombre;


?>
