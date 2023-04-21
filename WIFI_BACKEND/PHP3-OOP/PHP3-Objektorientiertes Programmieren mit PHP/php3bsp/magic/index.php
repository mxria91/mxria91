<?php
ini_set("error_reporting", E_ALL);

echo "<h3>Magische Methoden</h3>";

include "Magic.php";

$m = new Magic();

// Magic method: __set()
// mit der Methode kann man mehrere Werte erzeugen und diese in einem Array speichern 
$m->vorname = "Maria";
$m->nachname = "Hauser";
$m->alter = "31";

// Magic method: __get()
echo $m->nachname;
echo "<br>";
echo $m->alter;
echo "<br>";

// Magic method: __call()
$m->speichern("benutzer", "insert", 5, 32);

// Magic methed: __toString()
echo $m;
