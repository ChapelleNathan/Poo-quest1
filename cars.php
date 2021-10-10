<?php
require 'index.php';
$bicycle = new Bicycle('red');

$car = new Car('red', 4, 'Fuel');
echo $car->start() . "<br>";
echo $car->getIsEngineOn() . "<br>";
echo $car->forward() . '<br>';
echo $car->getCurrentSpeed() . '<br>';
$car->setCurrentSpeed('30');
echo $car->getCurrentSpeed() . '<br>';
echo $car->brake() . '<br>';
echo $car-> getCurrentSpeed() . '<br>';

$car2 = new Car('blue', 1, 'Muscle');
echo $car2->start() . "<br>";
echo $car2->getIsEngineOn() . "<br>";
echo $car2->forward() . '<br>';
echo $car2->getCurrentSpeed() . '<br>';
$car2->setCurrentSpeed('30');
echo $car2->getCurrentSpeed() . '<br>';


echo '<pre>';
var_dump($car);
echo '</pre>';

echo '<pre>';
var_dump($car2);
echo '</pre>';

echo '<pre>';
var_dump($bicycle);
echo '</pre>';
