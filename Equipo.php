<?php
class Equipo{

    //Declaración de variables
   private $jugadores = array();

   public function __construct(){
       
   }

   //Métodos añadir y obtener variables del array
   public function addJug ($nuevoJug){

    if ($nuevoJug instanceof Jugador) {
        $this->jugador[]=$nuevoJug;
    }
   }

   public function getJug(int $numeroJug){

        return $this->jugadores[$numeroJug];
   }

   //Método sumatorio total de puntos de cada jugador del array
   public function getTotal(){

       $resultado = 0;

        foreach ($this->jugador as $numeroJug) {
            $resultado += $numeroJug->getPtos();
        }

       return $resultado;
   }
}
?>