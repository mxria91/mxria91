<?php

class House {

    public $house;

    public function __construct($houseName) {
        $this->house = $houseName;
    }

    public function getAddress(){
        $house = "This " . $this->house . " is awesome! ";
        return $house;
    }


}