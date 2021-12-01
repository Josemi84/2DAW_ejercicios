<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Caso 1 Unidad 5</title>
    </head>
    
    <body>
        <h1>Tiradas del Jugador</h1>

        <?php

            //Inclusión de archivo Dado.php
            include 'Dado.php';

            //Creación de nuevo objeto dado generando sus variables
            $Jugador1 = new Dado();
            $Jugador1-> setminNumDado(-999);
            $Jugador1-> setmaxNumDado(999);
            
            //Para mostrar las tiradas hemos hecho un bucle de llamas a la función tirarDado()
            for ($i=0; $i < 12; $i++) { 

                $Jugador1->tirarDado($Jugador1-> getminNumDado (),$Jugador1-> getmaxNumDado ());
            }

        ?>
    </body>
</html>