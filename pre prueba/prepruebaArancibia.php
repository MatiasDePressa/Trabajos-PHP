<?php
include "prepruebaArancibia.html";
$talle=$_POST["talle"];
$color=$_POST['color']; 
$tela=$_POST["tela"];
$edad=$_POST["edad"];
$errores="";
$precio=0;


if($tela!="lycra" and $tela!="seda"){
    $errores.="- Solo son aceptadas lycra y seda.... vuelva a ingresar su tela <br>";
}

if($edad<18 or $edad>85){
    $errores.="- No esta dentro de la edad permitida...<br>";
}

if(empty($color)){ //si el valor de color es nulo lo marca como error
    $errores.="- No se ingresó ningun color<br>";
}
/*isset --> si esta definda ENTRA en el if, sino va a el else
empty || is_null--> verifica si la variable ESTA VACIA y si lo esta entra en el if*/


if($tela=="seda"){
    $precio=80000;
}

else{
    $precio=60000;
}



if($talle=="l" || $talle=="xl" && $tela=="seda"){
    $precio = $precio + $precio*0.1;
}

if($talle=="s" || $talle=="m" && $color=="verde"){
    $precio = $precio + $precio*0.05;
}



if($errores==""){
	echo "su vestido cuesta: ".$precio;
}

else{
	echo $errores;
}

