<?php
require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');

$uberX = new UberX("FDS364", new Account("Marco Narvaez", "MN123"), "Chevrolet", "Spark");
$uberX->printDataCar();

$uberPool = new UberPool("SDD354", new Account("Andreina Narvaez", "AN475"), "Dodge", "Attitude");
$uberPool->prinDataCar();
?>