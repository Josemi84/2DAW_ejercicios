<?php
include "consultasThronesDB.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Game of thrones</title>
</head>

<body>
    <h1>Juego de Tronos</h1>

    <a href="actores.php">Actores de la serie</a><br><br>

    <a href="season_ep.php">Actores de la serie por temporadas</a>
    <hr>

    <form action="actoresTemp.php" method="post">
        Actores por Episodio<br><br>
        <input type="text" name="episodio"><br><br>
        <input type="Submit" value="Elegir episodio">
    </form>

    <?php

    $n1 = new consultasThronesDB();
    $resumen = $n1->resumen();

    echo "<h2>Resumen de la serie</h2><hr>";
    echo "<h3>";

    foreach ($resumen as $fila) {
        echo $fila["plot"];
    }

    echo "</h3>";
    ?>


</body>

</html>