<?php
class Animal
{
    private $name;
    private $legs = 4;
    private $cold_blooded = "no";

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_legs(){
        return $this->legs;
    }
    public function get_cold_blooded(){
        return $this->cold_blooded;
    }
}
