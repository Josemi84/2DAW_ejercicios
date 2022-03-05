<?php
class DB
{

    //Atributos necesarios para la conexion
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "clubbasket";

    //Conector
    protected $conexion;

    //Propiedades para controlar errores
    protected $error = false;
    

    function __construct()
  {
    $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
    if ($this->conexion->connect_errno) {
        $this->error=true;
    }
  }

    //Funcion para saber si hay error en la conexion
    function hayError()
    {
        return $this->error;
    }

    public function devolverUltimoJugador(){
      if($this->error==false){
        $resultado = $this->conexion->query("SELECT * FROM jugadores ORDER BY id DESC LIMIT 1");
        return $resultado;
      }else{
        return null;
      }
  }

  //function insercion contra la tabla jugadores
  public function devolverJugadorId($id){
      if($this->error==false){
          $resultado = $this->conexion->query("SELECT * FROM jugadores WHERE id=".$id);
          return $resultado;
      }else{
          return null;
      }
  }

      
  public function insertarJugador($nombreJugador,$posicion,$numero,$edad){
      if($this->error==false)
      {
          $insert_sql="INSERT INTO jugadores (id, nombreJugador, posicion, numero, edad) VALUES (NULL,'".$nombreJugador."', '".$posicion."', '".$numero."', '".$edad."')";
          if (!$this->conexion->query($insert_sql)) {
              echo "Falló la insercion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
              return false;
          }
          return true;
      }else{
          return false;   
      }
  }

  public function actualizarJugador($id,$nombreJugador, $posicion, $numero, $edad){
      if($this->error==false)
      {
          $sql="UPDATE jugadores SET nombreJugador='".$nombreJugador."', posicion='".$posicion."', numero=".$numero.", edad=".$edad." WHERE id=".$id;
          if(!$this->conexion->query($sql)) {
              echo "Falló la actualizacion de la tabla: (" . $this->conexion->errno . ") " . $this->conexion->error;
              return false;
          }
          return true;
      }else{
        return false;
      }
  }
}
?>