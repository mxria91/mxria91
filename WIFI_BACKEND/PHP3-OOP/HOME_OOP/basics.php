<?php

// Eine Klasse "Person" wird erstellt
class Person {


    // Diese Klasse beinhaltet verschiedene Properties / Eigenschaften
    // Ohne Objekte sind diese Properties jedoch nutzlos
    public $name;
    public $age;
    public $adress;
    public $color;


    // $this bezieht sich auf das aktuelle Objekt 
    // und ist nur innerhalb Funktionen (Methoden) verfügbar
    function set_name($name) {
        $this->name = $name;
    }

    function set_color($color) {
        $this->color = $color ;
    }

    function get_name(): string {
        return $this->name;
    }

  
    function get_color(){
        return $this->color;
    }
    
}

// So wird ein neues Objekt erstellt
$man = new Person();
$woman = new Person();
$child = new Person();
$color = new Person();


// SET OBJECT 
// Zuerst muss ein Objekt erstellt werden
$man->set_name('Michael');
$woman->set_name('Maria');
$color->set_color("blue");

// GET OBJECT
// Erst danach kann es aufgerufen werden
echo "Name of Male: " . $man->get_name();
echo "<br>";
echo "Name of Female: " . $woman->get_name();
echo "<br>";
echo "Color used: " . $color->get_color();

echo "<pre>";
print_r($woman);


?>