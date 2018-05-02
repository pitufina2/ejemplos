<?php
class Vehiculo {
    var $matricula;
    var $numruedas;
    var $kms;
}
    function __ ($matricula, $numruedas, $kms){
    $this->matricula = $matricula;
    $this->numruedas = $numruedas;
    $this->kms = $kms;
}
    function getMatricula () { 
     return $this->matricula;
    }
    function setNombre ($matricula) {
        $this->matricula= $matricula;
    }       

    function getRuedas () {
        return $this-> ruedas; 
    }
    function setRuedas ($ruedas) {
        $this->ruedas= $ruedas;
    } 
    function getKms () { 
        return $this-> kms;
    }
    function setKms ($kms) {
        $this->kms= $kms;
    }                     
    function addVehiculo ($vehiculo) {
        $this->vehiculo[] = $vehiculo;      
    }   
}

// Aqui vann los getter y setter
    function setCiudad ($ciudad) {
        $this->cicudad = $ciudad;
    }
    function getCiudad    






    function getKms () { 
        return $this-> kms;
    }
    function setKms ($kms) {
        $this->kms= $kms;





class Concesionario {
    var $ciudad;
    var $vehiculos;
}



    function __construct ($ciudad){
        $this->ciudad[] =$ciudad;
    }

    function setCiudad ($ciudad) { 
        $this->ciudad = $ciudad;
    }
    funtion getCiudad (){
        return $this-> ciudad;
    }   
    function getVehiculos (){
        return $this->vehiculos;
    }


     function altaVehiculo ($vehiculo) {
        $this->vehiculos= $vehiculo;
    }       

    
    function bajaVehiculos ($nummatricula) {
        for ($i=0; $i< count ($this->vehiculos) && ($encontrado==false); $i++) {
            if ($this->vehiculos[$i] != null) {
                if ($numeromatricula == $this->vehiculos[$i]->getMatricula()){
                    $this->vehiculos[] = null;
                    $encontrado = true;
                }    
            }
        }        
    } 
    function  matricularVehiculo(){
    //  Suponemos que se conecta con la DGT y devuelve el num de matricula
        $matricula _aleatoria = rand();

        $encontrado = false;
        for ($i=0; $i< count ($this->vehiculos) && ($encontrado==false); $i++) {
            if ($this->vehiculos[$i] != null) {
                if($this->vehiculos[$i]->getMatricula() =='') {}
                    $this->vehiculos[$i]->getMatricula($matricula_aleatoria);
                    $encontrado = true;
                    $pos = $i;
                }
            }
        }
    }
    return $this->vehiculos[$pos];
}
    function venderVehiculo () {
        $vaux = $this->matricularVehiculo() ;
        $this->bajaVehiculo($vaux->getMatricula()) ;
        
    }                     
    
              
} 
    
    















}