<?php
class Account {
    private $id = integer;
    public $name = string; 
    public $document = string;
    public $email = string;
    public $password = string;

    public function __construct($name, $document) {
        $this->name = $name;
        $this->document = $document
    }
}
?>