<?php 
require_once("cliente.php");

$vector = array();

$vector[] = new Cliente ("Juan", 0);
$vector[] = new Cliente ("Pedro",1);
$vector[] = new Cliente ("Andrea",32);


$p1 = new Pedido ("2018-04-01", 100);
$vector[0]->altaPedido( new Pedido("2018-04-02", 50) );
$vector[0]->altaPedido ($p1);

$vector[1]->altaPedido( new Pedido("2018-04-05", 150) );
$vector[1]->altaPedido( new Pedido("2018-04-04", 250) );

$vector[2]->altaPedido( new Pedido("2018-04-06", 300) );
$vector[2]->altaPedido( new Pedido("2018-04-07", 400) );

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
        <div class="row">
            <div class="col">
                <button id="miboton" type="button" class="btn btn-primary">Primary</button>
            </div>

            <div class="col">
                <p class="miestilo" id="mitexto"> Texto de prueba </p>
                <ul>
                    <?php

                        for ($i=0; $i < count($vector); $i++) { 
                            echo "<li>";
                            echo $vector[$i]->getNombre()." - ";
                            
                            echo $vector[$i]->getEdad();
                            echo ($vector[$i]->getEdad() == 1) ? " año" : " años";
                            echo " - ";
                            
                            echo $vector[$i]->getImporteTotal()." €";
                            echo "</li>";
                        }

                    ?> 

                </ul>
            </div>

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="app.js"></script>
</body>
</html>