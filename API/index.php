

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Club de Basket</title>
    <style>
        h3, form{
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>Introduzca actualización del Jugador/a con ID:</h3><br><br>
    <form action="clubbasquet.php" method="post">

        <h4>ID del jugador/a</h4>
        <input type="text" name="id"><br>

        <h4>Nombre del jugador/a</h4>
        <input type="text" name="nombreJugador"><br>

        <h4>Nueva posicion</h4>
        <input type="text" name="posicion"><br>

        <h4>Número de dorsal</h4>
        <input type="text" name="numero"><br>

        <h4>Edad del jugador/a</h4>
        <input type="text" name="edad"><br><br>
        <input type="Submit" value="ACTUALIZAR">

    </form>


</body>