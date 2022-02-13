<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Ejercicio Sesiones</title>
</head>

<body>
    
    <?php
        session_start();
        $_SESSION=[];
        session_destroy();
       
    ?>
    <a href="sesion1.php">Volver al Formulario</a>
</body>

</html>