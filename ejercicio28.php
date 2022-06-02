<?php
//insertar datos  BD

$servidor="localhost"; //127.0.0.0
$usuario="root";
$contraseña="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=album", $usuario, $contraseña);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'jugando a la programacion', 'foto.jpg');";
    $conexion->exec($sql);

    echo "conexion establecida";
}catch(PDOException $error){
    echo "coneccion erronea".$error;
}



?>