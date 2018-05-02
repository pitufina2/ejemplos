<?php

class Vehiculo {

    var $color;

    var $kms;
 
    var $cv;

    var $techosolar;



    function __construct ($color,$kms, $cv, $techosolar,) {

        $this->color = $color;

        $this->kms = $kms;

        $this->cv = $cv;

        $this->techosolar =$techosolar//true o false

    }

// faltan los getter y setter () 

    function mostrar // faltan los getter y setter () {

        echo "Color: ".$this->color."<br>";

        echo "Kilómetros: ".$this->kms."<br>";

        echo "Cv: ".$this->cv."<br>";
        echo "techosolar".$this-"<br>";
        if ($this->techosolar ==true) { //if ($this->techosolar) {
            echo "Tiene techo solar";
        else {
            echo "No tiene techo solar"  
        }      

    }
    // faltan los getter y setter (tambien se pueden poner aqui o arriba)

}



Class  Coche extends Vehiculo {
    var$pma;
    var$tara;

    function __construct ($color,$kms,$cv,$techosolar) {
        parent::__construct($solar,$kms,$cv,$techosolar);
        $this->puertas->$puertas;
    }    
}
function mostrar(){
    parent::mostrar();
    echo "Puertas".$this->puertas."<br>";





class Coche extends Vehiculo {

    var $puertas;



    function __construct ($color,$kms, $cv, $techosolar, $puertas) {

        parent::__construct($color, $kms, $cv, $techosolar);

        $this->puertas = $puertas;

    }



    function mostrar () {

        parent::mostrar();

        echo "Puertas: ".$this->puertas."<br>";

    }

}

$a = new Coche ("Verde, 4000, 110, 5");
$a = mostrar()

7