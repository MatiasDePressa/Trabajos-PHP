<?php
$monto=$_POST["monto"];
$cargo=$_POST["cargo"];
$cuotas=$_POST["cuotas"];
$erorr=0;
$interes=0;

if (empty($monto)){
    $erorr=1;
}

if ($cargo>30000){
    $interes+=0.1;
}
else{
    $interes+=0.2;
}

if ($cuotas==36){
    $interes+=0.1;
}

if ($erorr!=0){
    echo "No hay definicion del prestamo";
}
else{
    $monto*=$interes;
    echo "Monto con intereses: $monto <br>";
    $interes*=100;
    echo "Cantidad de intereses: % $interes <br>";
    $monto/=$cuotas;
    echo "Valor de cada cuota: $monto";
}