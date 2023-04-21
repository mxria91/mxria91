<?php

// Wenn eine Klasse von einer anderen Klasse vererbt

use Fruit as GlobalFruit;

class Fruit {

    public $name;
    public $color; 

    public function __construct($name, $color) { 
        $this->name = $name;
        $this->color = $color;

    }

    public function intro() {
        echo "The fruit's name is {$this->name} and the color is {$this->color}";
    }

    protected function intro2() {
        echo "The fruit's name is {$this->name} and the color is {$this->color}";
    }
}

// Eine zweite Klasse wird erstellt, welche die properties von der Klasse vererbt.
class Strawberry extends Fruit {
    
    public function message() {
        echo "Am I a fruit or a berry? ";
    }
}

// Erstellung eines Objekts 
// Alle Parameter, die im __contruct drinnen stehen, werden für die Klasse Strawberry auch verlangt, da extends 'Fruit'

/**
* The Strawberry class is inherited from the Fruit class.
* This means that the Strawberry class can use the public $name and $color properties as well as the public __construct() and intro() methods from the Fruit class because of inheritance.
* The Strawberry class also has its own method: message(). 
**/

$strawberry = new Strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();


// Hat man aber zB eine protected/private Funktion in der Parent-Class, dann erhält man beim Zugriff als Child-Class ein Error.  
// $strawberry->intro2(); // ERROR. intro2() is protected

// Vererbungen überschreiben 

echo "<br>";

class Tea {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The tea is {$this->name} and the color is {$this->color}.";
    }
  }
  

  // die child class überschreibt die der parent class, 
  class GreenTea extends Tea {
    public $weight;
    public function __construct($name, $color, $origin) {
      $this->name = $name;
      $this->color = $color;
      $this->origin = $origin;
    }
    public function intro() {
      echo "The tea is {$this->name}, the color is {$this->color}, and the origin is {$this->origin}.";
    }
  }
  
  $greenTea = new GreenTea("green tea", "green", "china");
  $greenTea->intro();


// um eine Überschreibung zu verhindern, kann man für die parent class den Keyword "final" verwenden. 
final class ParentClass {
    // some code
  }
  
// will result in error
class childClass extends ParentClass {
    // some code
  }


?>
