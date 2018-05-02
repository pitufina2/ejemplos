<?php

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




$a