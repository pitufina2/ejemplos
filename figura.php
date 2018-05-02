<?php



class Figura {

    var $lado;



    function __construct ($lado) {

        $this->lado = $lado;

    }

}



class Triangulo extends Figura {

    var $altura;



    function __construct ($base, $altura) {

        $this->lado = $base;

        $this->altura = $altura;

    }

    function calcular () {

        echo "<br>";

        echo "Área del triángulo";

        echo (($this->lado * $this->altura) / 2);

        echo "<br>";

    }

}



class Cuadrado extends Figura {

    function calcular () {

        echo "<br>";

        echo "Área del cuadrado";

        echo ($this->lado * $this->lado);

        echo "<br>";

    }

}



class Rectangulo extends Figura {

    var $altura;



    function __construct ($base, $altura) {

        $this->lado = $base;

        $this->altura = $altura;

    }

    function calcular () {

        echo "<br>";

        echo "Área del rectangulo";

        echo ($this->lado * $this->altura);

        echo "<br>";

    }

}





$a = new Triangulo (10,5);

$b = new Cuadrado (10);

$c = new Rectangulo (10,20);

$a->calcular();

$b->calcular();

$c->calcular();


for $i=0 ; S