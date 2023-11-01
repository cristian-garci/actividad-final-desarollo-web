<?php
$server = "localhost";
$user = "root";
$pas ="";
$db = "basedtos";


$conexion = new mysqli($server, $user , $pas , $db);

if ($conexion-> connect_errno){
    die("conexion fallida". $conexion -> connect_errno);
} 
else {
    echo "conenctado a la base de datos";
}


