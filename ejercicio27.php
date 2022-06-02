<?php
// metodos estaticos
//instancia --> creacion de objeto

class UnaClase{

    public static function unMEtodo(){
        echo "Soy un metodo estatico ";
    }
    
}

$prueba=new UnaClase();
$prueba->unMEtodo();

UnaClase::unMEtodo();

?>