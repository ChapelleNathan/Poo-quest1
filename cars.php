<?php
require 'index.php';
$car = new Car('red', 4, 'Fuel');
echo $car->start() . "<br>";
echo $car->getIsEngineOn() . "<br>";
echo $car->forward() . '<br>';
echo $car->getCurrentSpeed() . '<br>';
$car->setCurrentSpeed('30');
echo $car->getCurrentSpeed() . '<br>';
echo $car->break() . '<br>';
echo $car-> getCurrentSpeed() . '<br>';

$bicycle = new Car('blue', 1, 'Muscle');
echo $bicycle->start() . "<br>";
echo $bicycle->getIsEngineOn() . "<br>";
echo $bicycle->forward() . '<br>';
echo $bicycle->getCurrentSpeed() . '<br>';
$bicycle->setCurrentSpeed('30');
echo $bicycle->getCurrentSpeed() . '<br>';


echo '<pre>';
var_dump($car);
echo '</pre>';

echo '<pre>';
var_dump($bicycle);
echo '</pre>';
