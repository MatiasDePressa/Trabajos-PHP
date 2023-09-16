<?php
	error_reporting(0);
	include 'a.html';

	/* tomo las variables desde el html mediante el NAME de los objetos 
	las varibles siempre se definen con el signo $ y toda linea temina con un punto y coma
	importante, para concatenar se usa el .*/
	$nomb=$_POST["nombre"];   
	$edad=$_POST["edad"];
	$gen=$_POST["gen"];
	$carg=$_POST["carg"];
	$ac=$_POST["acceso"];

	$acc="";

	$sueldo=0;

	if (isset($ac)){
		$acc.="Si";
		/*$acc = $acc."si"; */
		$sueldo+=2000;
	}

	else{
		$acc.="No";
	}


	if ($carg=="cad"){
	    $sueldo+=40000;

	    if ($gen=="F"){
	    	$sueldo+=2000;
	    }

        $sueldo="<span style=color:green;>$sueldo</span>";
	}


	if ($carg=="op"){
	    $sueldo+=30000;

	    if ($gen=="F"){
	    	$sueldo+=1500;
	    }

        $sueldo="<span style=color:purple;>$sueldo</span>";

	}


	if ($carg=="boss"){
	    $sueldo=70000;

        $sueldo="<span style=color:blue;>$sueldo</span>";

	}


	if ($carg=="ger"){
	    $sueldo=120000;

        $sueldo="<span style=color:red;>$sueldo</span>";

	}




	$rta=" El empleado ".$nomb." de ".$edad." años y genero ".$gen." es ".$carg. ". <br> Tiene acceso? ".$acc."<br> su sueldo es: ".$sueldo;

	print($rta);