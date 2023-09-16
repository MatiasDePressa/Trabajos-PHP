<?php
    $miarray_assoc=array('operario'=>20000, 
	    'cadete'=>25000,
        'gerente'=>60000,
        'jefe'=>45000 
     );
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Trabajo Practico N°8</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post" action="http://localhost/tarea/tp8/script.php">
            <div class="padre">
                <div class="hijo">
                    <legend>Trabajo Practico N°8</legend>
                    <h1></h1>
                    <br>
                    <h1></h1>
                    <label>Monto del Prestamo</label>
                    <input type="number" name="monto">
                    <br>
                    <h1></h1>
                    <label>Cargo</label>
                    <select name="cargo">
                        <?php 
                            foreach ($miarray_assoc as $cargo => $sueldo){
                                echo '<option value="'.$sueldo.'">'.$cargo.'</option>';
                            }
                        ?>
                    </select>
                    <br>
                    <h1></h1>
                    <label>Cantidad de cuotas</label>
                    <select name="cuotas">
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="84">84</option>
                    </select>
                    <br>
                    <h1></h1>
                    <input type="submit" value="calcular" id="boton">
                </div>
            </div>
        </form>
    </body>
</html>