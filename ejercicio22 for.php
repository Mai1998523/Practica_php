<?php

$frutas=array("f"=>"fresa","g"=>"manzana","h"=>"melon");

print_r($frutas["f"]);

echo $frutas["f"];


foreach($frutas as $indice=>&$valor){

    echo "valor ".$valor. "indice ".$indice."<br/>";

}


?>