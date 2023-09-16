<?php
include'index.html';

$nombre=$_POST["nombre"];
$cargo=$_POST["cargo"];
$sueldo=1000;
$error="";

if(empty($nombre)){
    $error.="la variable $nombre no esta definida ";
}

if(empty($cargo)){
    $error.="la variable $cargo no esta definida ";
}

if($cargo=="Cadete" || $cargo=="cadete"){
    $sueldo=20000;
}

if($error!=""){
    echo $error;
}
else{
    echo "el empleado se llama $nombre, su cargo es $cargo y su sueldo es de $sueldo";
}