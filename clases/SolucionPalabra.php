<?php
    class SolucionPalabra{

        private $palabra;
        private $longitud;

        public function DefinirTexto($palabra){
            $this->palabra = $palabra;
            $this->longitud =  strlen($palabra);       
        }

        public function MostrarPrimerDigito(){
            echo("El ultimo digito de la palabra ". $this->palabra. " es: ");
            echo("<br> <table border='1'>  <tr> <td>". $this->palabra[0]. "</td> </tr> <table> " );
        }
        public function MostrarUtimoDigito(){
            echo("El ultimo digio de la palabra ". $this->palabra. " es: ");
            echo("<br> <table border='1'>  <tr> <td>". $this->palabra[ $this->longitud-1]. "</td> </tr> <table> " );
        }
        public function MostrarCaracteres(){
            echo("Los caracteres de la palabra ". $this->palabra. " son:");
            for ($i=0; $i < $this->longitud; $i++) { 
                echo("<br> <table border='1'>  <tr> <td>". $this->palabra[$i]. "</td> </tr> <table>");
            }
        }

    }
?>