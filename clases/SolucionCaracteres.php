<?php
    class SolucionCaracteres{
        public $texto;
        private $longitud;

        public function DefinirTexto($texto){
            $this->texto = $texto;
            $this->longitud = strlen($texto);
        }
        public function RevisarTexto(){
            for ($index=0; $index < $this->longitud; $index+=2) { 
                
                echo(substr($this->texto, $index, 2). " ");
            
            }
        }

    }


?>