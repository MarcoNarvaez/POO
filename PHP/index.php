<?php
require_once('car.php');
require_once('account.php');

$car = new Car("AWE596", new Account("Marco Narvaez", "MAN477"));
$car->printDataCar();
?>