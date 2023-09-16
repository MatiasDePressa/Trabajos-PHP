<?php
include 'index.php';

$tipo=$_POST["tipo"];
$cantidad=$_POST["cantidad"];
$material=$_POST["material"];
$final=0;
$des=0;

function validar($cantidad){
    if ($cantidad>30 || $cantidad<0){
        return false;
    }
    else{
        return true;
    }
}

function descuento($material, $cantidad, $des){
    if ($cantidad != 'algarrobo'){
        if ($cantidad=='cedro'){
            $des+=0.2;
        }
        else{
            $des+=0.1;
        }
    }
    if($cantidad<5){
        $des-=0.05;
    }
    elseif($cantidad>7){
        $des+=0.07;
    }
    return $des;
}

if (validar($cantidad)==true){
    $final=$cantidad*$tipo;
    $final+=$final*descuento($material, $cantidad, $des);
    echo('<span style=color:red>'.$final.'</span>');
}
else{
    echo('<span style=color:red>'."error, cantidad no valida".'</span>');
}