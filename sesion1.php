<?php include "almacen.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio Sesiones</title>
</head>

<body>

    <form action="almacen.php" method="POST">

        <label>Introducir nombre</label><br><br>
        <input type="text" name="nombre" placeholder="Antonio..."><br><br>
        <input type="submit" value="Actualizar"><br><br>

    </form>
    <?php

        //Mostraremos el último usuario reggistrado o no, dependiendo si lo hubiera
        if (isset($_SESSION['ultimo'])) {

            echo "El último usuario registrado es : " . $_SESSION['ultimo'];
        } else {
            echo "Ningún usuario registrado";
        }
    ?>
    <br><br>
    
    <!-- Añadimos un pequeño botón para destruir la sesión-->
    <a href="destruir.php">Destruir Session</a>
</body>

</html>