<?php
include "thronesDB.php";

//Creamos la clase de consultas a partir de la clase padre con la conexión
class consultasThronesDB extends thronesDB
{

    function __construct()
    {
        parent::__construct();
    }

    //Función para el resumen
    public function resumen()
    {
        $consulta = "SELECT plot FROM titles";
        return $this->realizarConsulta($consulta);
    }

    //Funciones que muestra el nombre de los actores de la serie
    public function actores()
    {
        $consulta = "SELECT name, serie_name FROM cast ORDER BY name";
        return $this->realizarConsulta($consulta);
    }

    //Función que muestra los actores que participan en cada temporada
    public function actoresTemporada()
    {
        $consulta = "SELECT season, name FROM season_ep";
        return $this->realizarConsulta($consulta);
    }

    //Función que muestra los actores que participan en cada episodio
    public function actoresEpisodio($episode)
    {
        $consulta = "SELECT episode, name FROM season_ep WHERE episode ='".$episode."'";
        return $this->realizarConsulta($consulta);
    }
}
