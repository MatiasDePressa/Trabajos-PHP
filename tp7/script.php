<?php

$desc=$_POST["desc"];
$peso=$_POST["peso"];
$exp=$_POST["exp"];
$tipo=$_POST["tipo"];

function ValidarVaribles($varible1, $varible2){
    if(empty($varible1) || empty($varible2)){
        return false;
    }
    elseif($varible2>=11 || $varible2<=0){
        return false;
    }
    else{
        return true;
    }
}

function ObtenerEntrega($entrega, $cargoextra){
    $precio=0;
    if($entrega="dom"){
        $precio=1000;
    }
    elseif($entrega="suc"){
        $precio=1500;
    }
    if(isset($cargoextra)){
        $precio+=500;
    }
    return "El valor del envio de su pedido es de: $precio";
}

function Void($v1,$v2,$v3,$v4){
    if(ValidarVaribles($v1, $v2)==false){
        return "Error de lectura. Falta de datos";
    }
    else{
        return ObtenerEntrega($v3, $v4);
    }
}

echo Void($desc,$peso,$tipo,$exp);