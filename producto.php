<?php

class Producto {
    var $nombre;
    var $precio;
    function __construct ($nombre,$precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    function getNombre (){
        return $this->nombre;
    }
    function setNombre ($nombre) {
        $this->nombre = $nombre;
    }
    function getPrecio (){
        return $this->nombre;
    }
    function setPrecio ($precio) {
        $this->precio = $precio;
    }    

    function mostrar(){
        echo "Nombre:". $this->color. "<br>";
        echo "Precio:". $this->precio. "<br>";
    }



    class Productocongelado extends Producto {
        var $temperatura;
    }
    function __construct ($nombre,$precio,$temperatura) {
        parent:: __construct ($precio,$nombre);
        $this->temperatura =$temperatura;
    }
     function getTemperatura ();
        return Sthis->temperatura;
    }
    function setTemperatura ($temperatura) {
        $this->tempertatura =$tempertaura;
    }  
    function mostrar () {
        parent:: mostrar ();
        echo "Temperatura".$this->temperatura. "<br>";
    }
    
    
    class Productofresco extends Producto {
        var $fechacaducidad;
    }
    function __construct ($nombre,$precio,$temperatura) {
        parent:: __construct ($precio,$nombre);
        $this->fechacaducidad =$fechacaducidad;
    }
     function getFechacaducidad ();
        return Sthis->fechacaducidad;
    }
    function setFechacaduciad ($fechacaducidad) {
        $this->fechacaducidad =$fechacaducidad;
    }  
    function mostrar () {
        parent:: mostrar ();
        echo "Fechacaducidad".$this->fechacaducidad. "<br>";
    }
    
    




