<?php
    include "tp4.html";

        $nombre=$_POST["nombre"];
        $origen=$_POST["origen"];
        $destino=$_POST["destino"];
        $tipo=$_POST["tipo"];
        $valor=0;
        $error="";



        if($destino==$origen || empty($destino) || empty($origen) || empty($nombre)){
            $error.="ERROR";
        }




        if ($origen=="mdz" && $destino=="eze"){
            $valor=20000;
        }
        elseif ($origen=="mdz" && $destino=="cor"){
            $valor=20000;
        }
        elseif ($origen=="mdz" && $destino=="aep"){
            $valor=20000;
        }
        elseif ($origen=="cor" && $destino=="eze"){
            $valor=20000;
        }
        elseif ($origen=="cor" && $destino=="mdz"){
            $valor=20000;
        }
        elseif ($origen=="cor" && $destino=="aep"){
            $valor=20000;
        }
        elseif ($origen=="aep" && $destino=="cor"){
            $valor=20000;
        }
        elseif ($origen=="aep" && $destino=="eze"){
            $valor=20000;
        }
        elseif ($origen=="aep" && $destino=="mdz"){
            $valor=20000;
        }
        elseif ($origen=="eze" && $destino=="aep"){
            $valor=20000;
        }
        elseif ($origen=="eze" && $destino=="cor"){
            $valor=20000;
        }
        elseif ($origen=="eze" && $destino=="mdz"){
            $valor=20000;
        }
        else{
            $valor=40000;
        }

        if($tipo=="pl"){
            $valor+=($valor*0.1);
        }
        elseif ($tipo=="pr"){
            $valor+=($valor*0.2);
        }
        else{
            $valor==$valor;
        }


        if($error!=""){
            echo $error;
        }
        else{
            if(isset($_POST["50kg"])){
                $valor+=5000;
                echo "<span style=color:blue;>valor de viaje.$valor</span>";
            }
            elseif(isset($_POST["20kg"])){
                $valor+=2000;
                echo "<span style=color:fuchsia;>valor de vieje.$valor</span>";
            }
            elseif(isset($_POST["0kg"])){
                echo "<span style=color:green;>valor de viaje:.$valor</span>";
            }
        }


?>