<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Caso 1 unidad 7</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 0.5em;
        }
    </style>
</head>

<body>
    <?php

    //Conexión con la base de datos
    $mysqli = new mysqli("localhost", "root", "", "paises");

    if ($mysqli->connect_errno) {
        echo "Fallo de conexión con la Base de datos";
    } else {
        echo "Conexión exitosa con la base de datos <br>";
        echo "-----------------------------------------------<br><br>";
    }


    //Recopilación de datos en objeto resultado

    $resultado = $mysqli->query("SELECT * FROM pais");

    //Tabla mostrando la información
    echo "<table><tr><td>Nombre del pais</td><td>Continente</td></tr>";

    for ($i = 0; $i < $resultado->num_rows; $i++) {
        $fila = $resultado->fetch_assoc();
        echo "<tr>
            
            <td>" . $fila['nombre'] . "</td>
            <td>" . $fila['continente'] . "</td>

            </tr>";
    }


    echo "</table>";
    ?>
</body>

</html>