<?php

class Persona {

    var $nombre;

    var $edad;



    function __construct ($nombre, $edad) {

        $this->nombre = $nombre;

        $this->edad = $edad;

    }



    function setNombre ($nombre) {

        $this->$nombre = $nombre;

    }



    function getNombre () {

        return $this->nombre;

    } 

    function setEdad ($edad) {

        $this->$edad = $edad;

    }



    function getEdad () {

        return $this->edad;

    }



    function mostrar () {

        echo "Soy ".$this->nombre." y tengo ".$this->edad." años.<br>";

    }
     class Jugador extends Persona ($nombre ,$edad) {
            parent:__construct($nombre, $edad);
            $this-> numpartidos= $numpartidos;
     }
     function getNumpartidos (){
            return $this->numpartidos;
    }
    function setNumpartidos ($numpartidos){
             $this->numpartidos =$numpartidos;
     }
    function mostrar () {
        parent:: mostrar Persona ();
         $this->numpartidos =$numpartidos
         echo "numpartidos:".$this->numpartidos. "<br>";
     }
}        




//codigo <ppal:>
$a = new persona1;
$b = new persona2;
$c = new jugador1;
$d = new jugador2;

echo persona1, jugador1,numpartidos;
echo persona2, jugador2,numpartidos;

$vector = array (persona1.jugador1 , persona2.jugador2);

for ($i=0; $i<count(personas)&& count<(jugadores); $i= i++){
    if (persona [$i] == jugador [$i]) {
       persona [$i] = pos [$i];
    }
}
