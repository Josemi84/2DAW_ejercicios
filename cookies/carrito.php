<?php

//Declaraciónd e variables

$time = 86400;
$msj = 'Carrito de la compra vacio';
$cantidad = 0;
$carrito = [
    'chocolate' => 0,
    'queso' => 0,
    'zumo' => 0,
    'fruta' => 0
];

session_start();

//Función para limpiar las cookies y el carrito completamente

if (isset($_GET['vaciar']) && $_GET['vaciar'] == 1) {

    if (isset($_COOKIE['chocolate'])) {
        setcookie('chocolate', $_COOKIE['chocolate'], time() - 1);
    }
    if (isset($_COOKIE['queso'])) {
        setcookie('queso', $_COOKIE['queso'], time() - 1);
    }
    if (isset($_COOKIE['zumo'])) {
        setcookie('zumo', $_COOKIE['zumo'], time() - 1);
    }
    if (isset($_COOKIE['fruta'])) {
        setcookie('fruta', $_COOKIE['fruta'], time() - 1);
    }

}



//Función que recoge los datos de las páginas de los productos y crea/actualiza los datos de las cookies

                                                        //Pequeña condición para que no se repliquen los cambios en cookies
if (isset($_GET['nombre']) && isset($_POST['cantidad']) && isset($_SESSION['actualizar'])) {

    switch ($_GET['nombre']) {
        case 'chocolate':
            if (!isset($_COOKIE['chocolate'])) {

                setcookie('chocolate', $_POST['cantidad'], time() + $time); //Si aún no existe tal cookie
            } else {
                $cantidad = $_COOKIE['chocolate'] + $_POST['cantidad'];
                setcookie('chocolate', $cantidad);                          //Para actualizar su valor si ya existe
            }
            break;

        case 'queso':
            if (!isset($_COOKIE['queso'])) {

                setcookie('queso', $_POST['cantidad'], time() + $time);
            } else {
                $cantidad = $_COOKIE['queso'] + $_POST['cantidad'];
                setcookie('queso', $cantidad);
            }
            break;

        case 'zumo':
            if (!isset($_COOKIE['zumo'])) {

                setcookie('zumo', $_POST['cantidad'], time() + $time);
            } else {
                $cantidad = $_COOKIE['zumo'] + $_POST['cantidad'];
                setcookie('zumo', $cantidad);
            }
            break;

        case 'fruta':
            if (!isset($_COOKIE['fruta'])) {

                setcookie('fruta', $_POST['cantidad'], time() + $time);
            } else {
                $cantidad = $_COOKIE['fruta'] + $_POST['cantidad'];
                setcookie('fruta', $cantidad);
            }
            break;
    }

    unset($_SESSION['actualizar']); //Evitar repetición de datos al reloguear la página (F5)
} else {
    $msj = 'Carrito de la compra vacio';
}


//Asignamos al array carrito() los valores según las cookies

if (isset($_COOKIE['chocolate'])) {
    $carrito['chocolate'] = $_COOKIE['chocolate'];
}
if (isset($_COOKIE['queso'])) {
    $carrito['queso'] = $_COOKIE['queso'];
}
if (isset($_COOKIE['zumo'])) {
    $carrito['zumo'] = $_COOKIE['zumo'];
}
if (isset($_COOKIE['fruta'])) {
    $carrito['fruta'] = $_COOKIE['fruta'];
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Carrito de compras</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td, th{
            border: 1px solid black;
            padding: 0.2em;
            padding-left: 0.6em;
            padding-right: 0.6em;
        }
    </style>
</head>

<body>  <!--Mostrando el resultado en HTML-->

    <br>
    <h2>Mi carrito de la compra</h2>
    <a href="carrito.php?vaciar=1">vaciar carrito</a><br><br>
    <div class="contenedor">
        <?php
            echo '<table><th>Producto</th><th>Cantidad</th>';
            foreach ($carrito as $key => $value) {
                if ($value>0) {
                    echo'<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
                    $msj='';
                }
                  
            }
            echo '</table><br><br>'.$msj;
        ?>

    </div>
    
    <hr>
    <h3>Comprar Productos</h3>
    <a href="chocolate.php">Chocolates</a>
    <a href="queso.php">Quesos</a>
    <a href="zumo.php">Zumos</a>
    <a href="fruta.php">Frutas</a>

</body>

</html>