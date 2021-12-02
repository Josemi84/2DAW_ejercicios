<?php
class Jugador{

    //Declaración de variables
    private $numeroJug = 0;
    private $ptos = 0;

    //Método constructor y getters
    public function __construct(int $numeroJug){

        $this->numeroJug = $numeroJug;
    }

    public function getNumJug (){
        return $this->numeroJug;
    }

    public function getPtos (){
        return $this->ptos;
    }

    //Método añadir puntos
    public function addPtos (int $ptos){

        if ($ptos>0) {
            $this->ptos += $ptos;
        } else {
            echo "Número de puntos incorrectos";
        }
        
    }
}
?>