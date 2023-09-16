<?php
    $miarray_assoc=array('Cama'=>45000, 
        'Sofa'=>4800,
        'Mesa'=>60000,
        'Modular'=>45000, 
        'Ropero'=>45000 
    );

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>Tp N°9</title>
        <style>
            html{
                background-color: #010d23;
                background-size:cover;
                font-size: 15px;
            }
            .padre{
                margin-top: 200px;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .hijo{
                height: 400px;
                width: 400px;
                border-radius: 15px;
                background-color: #038bbb;
                text-align: center;
            }
            h2{
                margin-top: 15px;
            }
            #boton{
                margin-top: 15px;
                height: 25px;
                width: 100px;
            }
            #seleccion{
                width: 200px;
                height: 20px;
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <form method="post" action="http://localhost/tarea/tp9/script.php">
            <div class="padre">
                <div class="hijo">
                    <h1>Pedido De Muebles</h1>
                    <br>
                    <h2>Cantidad De Muebles: </h2>
                    <input type="number" name="cantidad">
                    <br>
                    <h2>Tipo De Mueble: </h2>
                    <select name="tipo" id="seleccion">
                        <?php 
                            foreach ($miarray_assoc as $tipo => $costo){
                                echo '<option value="'.$costo.'">'.$tipo.'</option>';
                            }
                        ?>
                    </select>
                    <br>
                    <h2>Material</h2>
                    <select name="material" id="seleccion">
                        <option value="algarrobo">Algarrobo</option>
                        <option value="cedro">Cedro</option>
                        <option value="pino">Pino</option>
                    </select>
                    <br>
                    <input type="submit" value="calcular" id="boton">
                </div>
            </div>
        </form>
    </body>
</html>