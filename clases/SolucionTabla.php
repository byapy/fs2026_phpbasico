<?php
    class SolucionTabla{
        private $numero;

        public function DefinirNumero($numero){
            $this->numero = $numero;
        }
        public function TablaNumero(){
            for ($index = 1; $index <= 10 ; $index++) {
                echo("<br>  $this->numero x $index = ". $this->numero * $index );

            }
        }
    } 
?>