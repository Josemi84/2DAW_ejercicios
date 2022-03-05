<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Club de Basket</title>

</head>

<body>



    <?php
        include "db.php";
        $user=new DB();

        //Mostraremos primero el anterior registro
        $resultado=$user->devolverJugadorId($_POST["id"]);

        if (isset($resultado)) {

            $fila=$resultado->fetch_assoc();
            echo "Registro anterior del Jugador/a<br><hr>";
            echo "id: ".$fila["Id"]."<br>";
            echo "nombre: ".$fila["nombreJugador"]."<br>";
            echo "posicion: ".$fila["posicion"]."<br>";
            echo "numero: ".$fila["numero"]."<br>";
            echo "edad: ".$fila["edad"]."<br><br><br>";

        } else {
            echo "No existe el Jugador con ID: ".$_POST["id"];
        }
        

        //Actualizar un usuario
        $resultado=$user->actualizarJugador($_POST["id"],$_POST["nombreJugador"],$_POST["posicion"],$_POST["numero"],$_POST["edad"]);

        //Devolver el usuario actualizado
        if($resultado!=false){

            echo "Registro actualizado del Jugador/a<br><hr>";

            $resultado=$user->devolverJugadorId($_POST["id"]);
            $fila=$resultado->fetch_assoc();

            echo "id: ".$fila["Id"]."<br>";
            echo "nombre: ".$fila["nombreJugador"]."<br>";
            echo "posicion: ".$fila["posicion"]."<br>";
            echo "numero: ".$fila["numero"]."<br>";
            echo "edad: ".$fila["edad"]."<br><br><br>";  
            
        }else{
            echo "Error en la insercion";
        } 
    ?>
</body>