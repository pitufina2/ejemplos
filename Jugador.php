<?php

class Jugador {

    var$nombre;
    var$fechaNac;
    var$goles;

    function Jugador($nombre,$fechaNac,$goles) {
        $this->nombre=$nombre;
        $this->fechaNac= $fechaNac;
        $this->goles= $goles;
    }

    function getNombre (){
        return$this->nombre;
    }

    function setNombre ($nombre){
        $this->nombre = $nombre;
    }

    function getFechaNac (){
        return $this->fechaNac;
    }

    function setFechaNac ($fechaNac){
        $this->fechaNac= $fechaNac;
    }

    function getGoles (){
        return $this->goles;
    }

    function setGoles ($goles){
        $this->goles = $goles;
    }



    function maximoGoleador (){
        max=0;
        for(i=0 ;i<count jugadores; i++) {
            if(máximo  <  jugadores[i]->goles)
            pos=i;
        }
        return jugador [i];
    }
}

class Equipo {
    var$nombre;
    var$estadio;
    var$jugadores;

    function Equipo ($nombre, $estadio, $jugadores){
        $this->nombre = $nombre;
        $this->estadio = $estadio;
        $this->jugadores = $jugadores;
    }
    function getNombre () { 
        return $this->nombre;
    }
    function setNombre ($nombre) {
        $this->nombre= $nombre;
    }       

    function getEstadio () {
        return $this-> estadio; 
    }
    function setEstadio ($estadio) {
        $this->estadio= $estadio;
    } 
    function getJugadores () { 
        return $this-> jugadores;
    }
    function setJugadores ($jugadores) {
        $this->jugadores= $jugadores;
    }                     
    function addJugador ($jugador) {
        $this->jugadores[] = $jugador;
    }
}



class Federación {
    
var $pais;
var $nombre;


 




    function maximoGoleador (){
        max=0;
        for(i=0 ;i<count equipos; i++) {
            if(máximo  <  equipos[i]->maximoGoleador()->goles;
                maximo=equipos[i]->maximoGoleador()->goles;
                pos=i;
            }
        }    
        return equipos [pos]->maximoGoleador;
    }



}



//Una forma de crear un jugador

$mijugador = new Jugador();

$mijugador->setNombre("Messi");

$mijugador->setEdad(30);






//Otra forma de crear un jugador llamando al constructor parametrizado (con parámetros)

$mijugador = new Jugador ("Messi", 30)



//Recuperar datos

echo "El nombre es ".$mijugador->getNombre();

echo "La edad es ".$mijugador->getEdad();





$equipoprueba-> new Equipo ();

$jug = new Jugador ();
$jug2 = new Jugador ();

$equipoprueba->addJugador(jug);
$equipoprueba->addJugador(jug2);