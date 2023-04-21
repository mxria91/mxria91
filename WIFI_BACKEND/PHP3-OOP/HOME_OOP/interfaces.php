<?php

// Interfaces geben an, welche Methoden eine Klasse implementieren sollte.
// Wenn eine Klasse die gleiche interface nutzen, nennt man das polymorphism.


interface InterfaceName {

    public function someMethod1();
    public function someMethod2($name, $color);
    public function someMethod3(): string;

}

// Interfaces ähneln sehr zu abstrakten Klassen. Es gibt jedoch verschiedene Differenzen: 
/**
 * 1) Interfaces haben keine properties, abstrakte Klassen schon
 * 2) alle Interface Methoden müssen public sein, während abstrakte Klassen public oder protected sein können
 * 3) alle Methoden in einem interface sind abstrakt, sie können nicht in einem code implementiert werden und das Keyword "abstract" ist nicht zwingend notwendig
 * 4) Klasses können einen interface implementieren während sie von einer anderen Klasse erben
 */



 interface Animal {

    public function makeSound();

 }


 class Cat implements Animal {
    public function makeSound() {
        echo "Miau." . "<br>";
    }
 }

 class Dog implements Animal {
    public function makeSound() {
        echo "Wuuff." . "<br>";
    }
 }

 class Mouse implements Animal {
    public function makeSound()
    {
        echo "Miep." . "<br>";
    }
 }



 // Animal Objects - einzelne Tierobjekte werden erstellt
 $dog = new Dog();
 $cat = new Cat();
 $mouse = new Mouse();

 // Array - alle Tiere werden in einem Array gespeichert
 $animals = array($cat, $dog, $mouse);

 // All animal sounds (foreach) - Ausgabe jeder dieser Tierobjekte mit der Durchführung von makeSound als for-Schleife
 foreach ($animals as $animal) {
    $animal->makeSound();
 }



