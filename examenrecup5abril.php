<?php

class Jugador extends Persona{
    var $numPartidos;

    function __constructor ($nombre,$edad,$numPartidos){
        parent::__construct ($nombre,$edad);
        $this->numPartidos = $numPartidos;
    }
    function getNumPartidos(){
        return $this->numPartidos;
    }
   function setNumPartidos($numPartidos){
        $this->numPartidos = $numPartidos;
   }
   function mostrar (){
       parent:: mostrar ();
       echo "Ha jugado".$this->getNumPartidos()."partidos <br>";
   } 

}


$a = new Persona ("Pepe",25);
$b = new Persona ("Marta", 27);
$c = new Jugador ("Messi",29,1000);
$d = new Jugador ("CR7",30,999);
$vector = array ($a,$b,$c,$d);
for ($i=0; $i <count ($vector) ; $i++) { 
    $vector [$i] ->mostrar ();
}
