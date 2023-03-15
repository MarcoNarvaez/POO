<?php
require_once('account.php');
class Car {
    private $id
    public $license
    public $driver
    public $passenger

    public function __construct($license, $driver) {
        $this->license = $license;
        $this->driver = $driver;
    }

    public function printDataCar() {
        echo "license: $this->license, Driver: ".$this->driver->name;
    }
}
?>