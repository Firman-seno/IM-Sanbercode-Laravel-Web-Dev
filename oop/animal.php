<?php

class animal {
    public $name ;
    public $legs = 4;
    public $cold_blooded = "no";

    public function __construct($name, $legs = 4, $cold_blooded = "no") {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }
}





?>