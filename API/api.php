<?php

    require_once 'db.php';
    

    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $datos = json_decode(file_get_contents('php://input'));

        if ($datos != null) {
            $miClub = new DB(
                $datos->id,
                $datos->nombreJugador,
                $datos->posicion,
                $datos->numero,
                $datos->edad
            );

            if ($miClub->actualizarJugador(1,'Paquito', 'base', 7,20)) {
                http_response_code(200);
            } else {
                http_response_code(400);
            }
        } else {
            http_response_code(405);
        }
    }

?>