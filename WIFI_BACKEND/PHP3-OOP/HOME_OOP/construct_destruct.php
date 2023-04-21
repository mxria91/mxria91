<?php


// CONSTRUCT


// Erstellt man eine __construct Funktion, dann wird PHP automatisch diese Funktion aufrufen beim Erstellen eines Objektes mit der Klasse.
// Erstellt man eine __destruct Funktion, dann wird PHP automatisch diese Funktion beim Ende des Skriptes aufgerufen. 

// Im vorherigen Beispiel wurde ein set_name verwendet. Dies bleibt zB mit einem __construct erspart.

class Myself {

    public $name;
    public $age;

    /* function set_name($name) {
        $this->name = $name;
    }

    */

    function __construct($name, $age) {
        $this->name = $name;     
        $this->age = $age;   
    }

    function get_name() {
        return $this->name;
    }

    function get_age() {
        return $this->age;
    }


}

// Um bei der Erstellung eines Objekts direkt die Funktion "set_name" aufzurufen, kann die __construct Methode angewandt werden.
// $me->set_name("Maria");  // dieser Schritt bleibt erspart

$me = new Myself("Maria", 32);  // Mit der __construct Methode wird diese Funktion direkt bei der Erstellung des Objekts aufgerufen und der Parameter wird übergeben. 


echo "This is using the __construct Method: " . $me->get_name() . " and I am " . $me->get_age() . " years old.";




// DESTRUCT 

class Fruit {

    public $fruitName;
    public $color;
    public $country;

    function __construct($fruitName, $color, $country) {
        $this->fruitName = $fruitName; 
    }

    function get_fruitName() {
        return $this->fruitName;
    }

    // Die __destruct Methode wird immer am Ende der Erstellung eines Objekts/Skripts aufgerufen. 

    function __destruct() {
        echo "This is a {$this->fruitName}"; // Da wir uns in der Klasse befinden, kann hier direkt auf die Eigenschaft zugegriffen werden.
    }

}

echo "<br>";

$durian = new Fruit("Durian", "green", "Malaysia" );


?>