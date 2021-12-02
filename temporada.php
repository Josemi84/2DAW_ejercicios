<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Caso 2 Unidad 5</title>
    </head>
    
    <body>
        <h1>Temporada Baloncesto</h1>

        <?php

            //Añadimos los archivos de las clases
            include 'Jugador.php';
            include 'Equipo.php';

            //Creamos un objeto equipo
            $Betis = new Equipo;
            
            //Creamos una nueva variable "Jugador" para cada contador del bucle
            for ($i=1; $i <= 9; $i++) { 
                
                //Así se crea una variable única para cada clase jugador
                $nom = "Jugador".($i);
                ${$nom} = new Jugador($i+4);       //Pongo +4 para modificar el nº del dorsal

                //Añadimos los puntos a cada jugador
                ${$nom}->addPtos(rand(20, 100));

                //Agregamos cada jugador a nuestro equipo
                $Betis->addJug(${$nom});

            }

            //Mostramos el total de puntos del equipo

            $total = $Betis->getTotal();
            echo "El total de puntos es: ".$total;
           
        ?>
    </body>
</html>