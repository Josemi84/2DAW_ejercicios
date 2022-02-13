<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio Sesiones</title>
</head>

<body>

    <?php
    session_start();


    if (isset($_POST['nombre'])) {

        if (!isset($_SESSION['nombre'])) {

            $_SESSION['ultimo'] = $_POST['nombre'];

        } else {                                        //cambiamos la variable nombre, al nuevo del formulario
            $_SESSION['ultimo'] = $_SESSION['nombre'];  //Mientras gguardamos el anterior en la variable "ultimo"
            $_SESSION['nombre'] = $_POST['nombre'];
        }

        echo "El último usuario registrado es : " . $_SESSION['ultimo'];
    }

    ?>

</body>

</html>