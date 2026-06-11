<?php
    class SolucionPalabra{

        private $palabra;
        private $longitud;

        public function DefinirTexto($palabra){
            $this->palabra = $palabra;
            $this->longitud =  strlen($palabra);       
        }
        public function MostrarPrimerDigito(){
            echo( "La palabra es: " . $this->palabra. " y tiene " . $this->longitud. " digitos");
            echo("<br> <table border='1'> <th> <tr> <td> $this->palabra[0] </td> </tr> </th> <table> " );

        }

    }
?>