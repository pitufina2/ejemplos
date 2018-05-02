<?php


class Padre{
    function mostrar (){
        echo "Soy tu padre";
    }
}   
class Hija extends Padre {
    function mostar () {
        echo "Soy tu hija";
        parent: mostrar();
    }
}


$p= new Hija ();
$p-> mostrar();
