<?php

require 'car.php';

$car = new Car('pink', 5);
var_dump($car);
echo "<br>";

$car->setParkBrake(true);
var_dump($car);

try {
    $car->start();
} catch (Exception $e) {
   echo 'Oups ! '.$e->getMessage()."<br>";
   $car->setParkBrake(false);
    var_dump($car);
} finally {
    echo 'Ma voiture roule comme un donut';
}