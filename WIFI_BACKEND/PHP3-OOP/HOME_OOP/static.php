<?php

// Statische properties können direkt gecalled werden, ohne eine instanz einer Klasse kreieren zu müssen
// Statische properties (oder Methoden) sollten nur dann verwendet werden, wenn diese Eigenschaft universell gilt und dafür nicht extra eine Klasse erstellt werden muss
// zB class Person ($age, $name = können unterschiedlich sein für jede Person; $drinkingAge = 16; zB ist universell und kann als statische Eigenschaft definiert werden)
// man kann also auf statische Eigenschaften zugreifen, ohne vorher ein Objekt erstellen zu müssen (className::$variable)


use childClass as GlobalChildClass;

class ClassName {

    public static $staticProperty = "Maria Repolust";

}

// Um auf eine statische Property zugreifen zu können, muss der double colon verwendet werden ::

echo ClassName::$staticProperty;

// Eine Klasse kann statische als auch nicht statische Eigenschaften besitzen

class Pi {
    public static $wert = 3.14159;

    // auf eine statische Eigenschaft kann von einer Funktion innerhalb der gleichen Klasse zugegriffen werden, in dem das Keyword self verwendet wird.
    public function staticValue() {
        return self::$wert;
    }

}


echo "<br>";

// Um von einer child class auf eine statische Eigenschaft der parent-class zugreifen zu können, muss das Keyword parent verwendet werden

class ChildClass extends Pi {
    public function XYZ() {
        return parent::$wert;
    }
}

// entweder greift man direkt auf die Klasse zu und die gewünschte Eigenschaft
// Get value of static property directly via child class
echo childClass::$wert;


echo "<br>";

// oder man erstellt ein Objekt und ruft die Funktion auf über die parent-class
// or get value of static property via xStatic() method 
$xyz = new ChildClass();
echo $xyz->XYZ();




echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// Self-Exercise
echo "<h4>Exercise</h4>";

class Holiday {

    public $country;
    public static $publicHoliday = "31. December";

    public static function setHoliday($newHoliday) {
        return self::$publicHoliday = $newHoliday;
    }

}

//Zugriff auf die Eigenschaft ohne vorherige Erstellung eines Objekts
echo Holiday::$publicHoliday;

//Zugriff auf eine Methode mit statischem Inhalt 

echo "<br>";

// Erstellung eines neuen Objekts und Zugriff auf die Methode mit Übergabe des neuen Parameters
$newHoliday = new Holiday();
echo $newHoliday->setHoliday("1. January");


?>