<?php

class persona{
    public $nombre; //propiedades
    private $Edad;
    protected $altura;

    //acciones o metodos
    public function asignarnombre($nuevonombre){
        $this->nombre=$nuevonombre;
    }
    public function imprimirnombre(){
        echo "hola mi nombre es ".$this->nombre;
    }
    public function mostraredad(){
        $this->edad=20;
        return $this->edad;
    }

}
$objalumno =new persona; //instancia o creacion de un objeto
$objalumno->asignarnombre("MAigualida");//llamando al metodo

$objalumno2 = new persona;
$objalumno2->asignarnombre("Lizet");
$objalumno2->imprimirnombre();

$objalumno2->mostraredad();


?>