<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Compra de Fruta</title>
</head>

<body>
    
    <h3>Frutas</h3>
    <form action="carrito.php?nombre=fruta" method="post">

        Introduzca cantidad de piezas:<br><br>
        <input type="text" name="cantidad"><br><br>
        <input type="submit" value="Añadir al carrito">

    </form>
    <?php
        //Gracias a que solo iniciamos sesión al entrar en las páginas de productos
        // solo modificamos el código una vez por logueo 

        session_start();
        $_SESSION['actualizar']=true;  
    ?>
    
    
</body>

</html>