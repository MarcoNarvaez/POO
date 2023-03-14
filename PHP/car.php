<?php
class Car {
    private $id = integer;
    public $license = string;
    public $driver = string;
    public $passenger = integer;

    public function PrintDataCar() {
        echo "license: $this->license, conductor
        {$this->driver->name},document:
        {$this->driver->document}"
    }
}
?>