<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actores de la serie</title>
</head>

<body>
    <?php

    include "consultasThronesDB.php";

    $n2 = new consultasThronesDB();

    $names = $n2->actores();
    echo "<h1>Actores de la serie Game of Thrones</h1><hr>";
    echo "<table>";
    echo "<tr><th>Nombre del actor</th><th>Personaje Interpretado</th></tr>";
    foreach ($names as $fila) {
        echo "<tr>
            <td>" . $fila["name"] . "</td>
            <td>" . $fila["serie_name"] . "</td>
        </tr>";
    }
    echo "</table>";
    ?>
</body>

</html>