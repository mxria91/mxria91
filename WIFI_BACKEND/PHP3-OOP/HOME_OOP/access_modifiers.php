<?php


/*
* PUBLIC - die Eigenschaft oder die Methode kann jederzeit von allen zugegriffen werden (Default)
* PRIVATE - die Eigenschaft oder die Methode kann nur innerhalb der Klasse zugegriffen werden
* PROTECTED - die Eigenschaft oder die Methode kann nur innerhalb einer Klasse zugegriffen werden oder von Klassen die children sind
 */

 class Cars {

    public $modell;
    // private $color;
    // protected $owner;


    function __construct($modell, $color, $owner) {
        $this->modell = $modell;
        $this->color = $color; // ERROR, da private 
        $this->owner = $owner; // ERROR, da protected 
    }
}

$carOne = new Cars("Mercedes Benz", "black", "Maria");
echo $carOne->color;
echo "<br>";


// Dasselbe gilt auch für Funktionen


class Furniture {

    public $name;
    public $designer;

    public function setFurnitureName($name) {
        $this->name = $name;
    }

    private function setDesignerName($designer) {
        $this->designer = $designer;
    }


}

$corbusier = new Furniture();
$corbusier->setFurnitureName("LC3");
$corbusier->setDesignerName("Le Corbusier"); // Error, da Methode: Private -> Uncaught Error: Call to private method Furniture::setDesignerName() from global scope


