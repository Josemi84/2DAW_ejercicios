<?php
    class Dado {

        //Definición de variables privadas
        private $minNumDado = 0;
        private $maxNumDado = 0;

        //Getters y Setters de las variables
        public function setminNumDado ($minNumDado){

            if ($minNumDado<0) {
                $this->minNumDado = 0;      //condicionante mínimo número

            } else {
                $this->minNumDado = $minNumDado;
            } 
        }
        public function setmaxNumDado ($maxNumDado){

            if ($maxNumDado>=12) {
                $this->maxNumDado = 12;     //condicionante máximo número
                
            } else {
                $this->maxNumDado = $maxNumDado;
            }
        }

        public function getminNumDado (){
            return $this->minNumDado;
        }

        public function getmaxNumDado (){
            return $this->maxNumDado;
        }

        //Función de tirada de dados
        public function tirarDado ($min,$max){
            
            echo rand($min,$max)."<br>";
        }
    }
?>
