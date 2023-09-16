<?php

error_reporting(0);
include 'tp5.html';

/*definicion de variables*/

$nombre=$_POST["nombre"];
$trans=$_POST["trans"];
$propiedad=$_POST["propiedad"];
$habitaciones=$_POST["habitaciones"];
$sueldo=$_POST["sueldo"];
$error="";
$exito="";

/*varibles no definidas*/

if (empty($nombre)){
    $error.="la variable no esta definida";
}
elseif (empty($trans)){
    $error.="la variable no esta definida";
}
elseif (empty($habitaciones)){
    $error.="la variable no esta definida";
}
elseif (empty($sueldo)){
    $error.="la variable no esta definida";
}

/*nombre no numerico*/

if (is_numeric($nombre)){
    $error.="nombre no puede ser numerico";
}

/*maximo y minimo de habitaciones*/

if ($habitaciones<=0 || $habitaciones>=5){
    $error.="la cantidad de habitaciones no puede ser menor a 1 ni menor a 5";
}

/*validacion de sueldo*/

if ($sueldo<10000){
    $error.="el sueldo no puede ser menor a 10000";
}

/*sueldo aprobado*/

if ($sueldo>=18000){
    $exito.= "<span style=color:green;> sueldo aprobado </span>";
}
else {
    $error.="<span style=color:red;> sueldo desaprobado </span>";
}

/*renovacion de contrato*/

if ($sueldo>=18000 && $sueldo<=60000){
    $exito.="renovacion de contrato cada 2 años";
}
elseif ($sueldo>60000){
    $exito.="renovacion de cointrato cada 3 años";
}

if ($error!=""){
    echo $error;
}
else{
    echo $exito;
}

?>