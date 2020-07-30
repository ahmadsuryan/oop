<?php

class Animal {
    private $name,$legs,$cold_blooded;

    public function __construct($name) {
        $this->name = $name;
        $this->legs = 2;
        $this->cold_blooded = 'false';
    }

    public function get_name() {
        return $this->name;
    }

    public function get_legs() {
        return $this->legs;
    }

    public function get_cold_blooded() {
        return $this->cold_blooded;
    }

}





