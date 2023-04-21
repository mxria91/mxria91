<?php
// Klassendefinition einbinden
include "Person.php";

// Objekt erzeugen aus der Klasse "Person"
// Instanzieren / Instanz erstellen
$ich = new Person("Markus");

// echo "<pre>";
// print_r($ich);

// Durchführen von Funktion vorstellen() mit der Variable $ich
echo $ich->vorstellen();
echo "<br>";


// Überschreiben des Wertes in der Variable $ich
$ich->set_vorname("Andrea");
echo $ich->vorstellen();

echo "<br>";


echo "<br>";
echo $ich->get_vorname();


echo "<br>";
echo "<br>";


// Weiteres Objekt erstellen mit einer neuen Variable
$sie = new Person("Sabrina");
echo $sie->vorstellen();
echo "<br>";
