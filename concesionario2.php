<?php
class concesionario {
    var $ciudad;
    var $vehiculos;

    function __construct ($ciudad){
        $this->ciudad= $ciudad;
    }  
    function __construct ($vehiculos){    
        $this->vehiculos= $vehiculos;     
    }  
    function setCiudad ($ciudad) {
        $this->ciudad= $ciudad;
    }
    function getCiudad (){
        return $this-> ciudad;
    }

    function getVehiculos () {
        return $this-> vehiculos;
    }


    function altaVehiculo ($vehiculo){
       $this-> vehiculo [i] = $vehiculo;
    }

    function bajaVehiculos ($numeromatricula){
        $enc= false;
        for ($i=0 ; $i<count ($this->vehiculos) && ($enc ==false) ; $i ++) {
            if ($this->vehiculos[i] != null){
                if ($numeromatricula == $this->vehiculo[$i]->getMatricula ()) {
                    $this->vehiculos[$i] == null;
                    $enc= true;
                }
            }
        }
    }
    
    function matricularVehiculo (){
        $martricula_aleatoria= rand ();





