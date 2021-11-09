<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Caso 1 Unidad 4</title>
    <link href="multiplicar.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php

    //Cración del Array
        $tablas = [
            "Primera" => 5,
            "Segunda" => 13,
            "Tercera" => 11
        ];

    //Formación de la estructura de la tabla
    echo "<table>";

    //Realizamos un bucle for que recorra las 11 filas de nuestra tabla
    for ($i = 0; $i < 11; $i++) {

        echo "<tr>"; //Estructura HTML de cada fila

        //Hemos hecho un if simplemente para diferenciar entre mostrar el nombre de la clave del array solo en primer lugar

        if ($i == 0) {

            foreach ($tablas as $clave => $valor) {
                echo "<th>" . $clave . " tabla</th>"; //Se muestran los encabezados
            }
        } else {

            //Bucle que recorre cada fila y en la respectiva columna del valor del array creamos su resultado y lo mostramos

            foreach ($tablas as $valor) {
                $resultado = $valor * $i;
                echo "<td>" . $valor . " x " . $i . " = " . $resultado . "</td>"; //Estructura HTML de cada fila
            }
        }

        echo "</tr><br>";
    }

    echo "</table>";
    ?>
</body>

</html>