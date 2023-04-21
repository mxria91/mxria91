<?php

// Eine Abstrakte Klasse oder Methode verwendet man dann, wenn eine parent class eine Methode enthält, die child class die Funktionen aber durchführen soll
// Eine Abstrakte Klasse beinhaltet zumindest eine abstrakte Methode
// Eine Abstrakte Methode ist eine definierte Methode, aber nicht im Code implementiert


/**
 * Wenn eine child class von einer parent class erbt, dann sind folgende Regeln zu beachten: 
 * 1) Der Name der child class Methode muss gleich definiert werden und es redeklariert die parent abstract Methode. 
 * 2) Die child class muss genau so definiert werden oder mit einer weniger beschränkten access modifier (private->protected->public).
 * 3) Die Anzahl der benötigten Argumente müssen genau ident sein. Nichtsdestotrotz kann die child class zusätzliche Argumente beinhalten. 
 */


 // Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }
  
  // Child classes
  class Audi extends Car {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!";
    }
  }
  
  class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }


  // The Audi, Volvo, and Citroen classes are inherited from the Car class
  // This means that the Audi, Volvo, and Citroen classes can use the public $name property as well as the public __construct() method from the Car class because of inheritance
  // But, intro() is an abstract method that should be defined in all the child classes and they should return a string.
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();

  echo "<br>";


  // Weiteres Beispiel:




  abstract class ParentClass {
    //Abstract Methode mit einem Argument:
    abstract protected function prefixName($name);
  }

  class ChildClass extends ParentClass {

    // Gleiche Benennung wie Parent Methode und Redeklaration der Parent Methode
    // Gleiche Anzahl der Argumente
    public function prefixName($name) {
        if ( $name == "John Doe") {
            $prefix = "Mr. ";
        } elseif ( $name == "Jane Doe") {
            $prefix = "Mrs. ";
        } else {
            $prefix = "";
        }
        return "{$prefix} {$name}";

    }
  }

  
  $class = new ChildClass;
  echo $class->prefixName("John Doe");
  echo "<br>";
  echo $class->prefixName("Jane Doe");
  echo "<br>";






// Weiteres Beispiel, wo mehrere Argumente angegeben werden

abstract class Family {

    // One Abstract Method with a Single Argument
    abstract protected function familyName($name);

}

echo "<br>";



class children {

    // Es werden beim Aufruf der Funktion von der parent Methode mehrere Argumente übergebe
    public function familyName($name, $separator = ".", $greet = "Dear") {
        if ( $name == "Repolust") {
            $prefix = "Mrs";
        } elseif ( $name == "John Doe") {
            $prefix = "Mr";
        } else {
            $prefix = "";
        }
        
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}



$familyClass = new children;
echo $familyClass->familyName("Repolust");


?>