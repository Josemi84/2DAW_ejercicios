<?php
include "consultasThronesDB.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Actores por episodio</title>
</head>

<body>
    <?php
    $n4 = new consultasThronesDB();

    if (isset($_POST["episodio"])) {
        $names = $n4->actoresEpisodio($_POST["episodio"]);

        echo "<h1>Actores de la serie Game of Thrones del episodio " . $_POST["episodio"] . "</h1><hr>";
        echo "<table>";
        echo "<tr><th>Episodio</th><th>Nombre del actor</th></tr>";

        foreach ($names as $fila) {
            echo "<tr>
                <td>" . $fila["episode"] . "</td>
                <td>" . $fila["name"] . "</td>
            </tr>";
        }
        echo "</table>";
    }

    ?>
</body>

</html>