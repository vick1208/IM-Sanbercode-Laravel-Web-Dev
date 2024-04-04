<?php
require_once "animal.php";

class Ape extends Animal{
    private $legs = 2;
    public function get_legs(){
        return $this->legs;
    }
    public function yell(){
        return "Auooo";
    }
}
