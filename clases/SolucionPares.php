<?php
    class SolucionPares{

        private $numero1;
        private $numero2;

        public function setNumero1($numero1){
            $this->numero1 = $numero1;
        }
        public function setNumero2($numero2){
            $this->numero2 = $numero2;
        }
        public function GenerarNumeros(){
            $mayor = 0;
            if($this->numero1 > $this->numero2){
                $mayor = $this->numero1;
                $this->numero1 = $this->numero2;
                $this->numero2 = $mayor;
            }
            for ($index=$this->numero1; $index  <=$this->numero2; $index++) { 
                if($index % 2 == 0){
                    echo ("<br>$index");
                }
            }
        }
        public function VerificarMayorMenor(){
            if($this->numero1 > $this->numero2){
                echo ("<br> $this->numero1 es mayor que $this->numero2");
            }elseif ($this->numero2 > $this->numero1){
                echo ("<br> $this->numero2 es mayor que $this->numero1");
            }else {
                echo ("<br> Los numeros son iguales");
            }
        }
    }
?>
