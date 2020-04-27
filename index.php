<?php
require_once ("lightable.interface.php");
require ("./Car.php");
require_once ("Bicycle.php");

$car = new Car('green', 4, 'fuel');

$car->switchOn();
var_dump($car);
$car->switchOff();
var_dump($car);

$bike = new Bicycle('red', 1);

$bike->switchOff();
var_dump($bike);
$bike->forward();
$bike->switchOn();
var_dump($bike);



