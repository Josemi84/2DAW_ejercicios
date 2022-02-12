<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actores por temporada</title>
</head>

<body>
    <?php
    include "consultasThronesDB.php";

    $n3 = new consultasThronesDB();

    $seasons = $n3->actoresTemporada();


    echo "<h1>Actores por temporada</h1><hr>";
    echo "<table>";
    echo "<tr><th>Temporada</th><th>Nombre del actor</th></tr>";
    foreach ($seasons as $fila) {
        echo "<tr>
                <td>" . $fila["season"] . "</td>
                <td>" . $fila["name"] . "</td>
            </tr>";
    }
    echo "</table>";

    ?>
</body>

</html>