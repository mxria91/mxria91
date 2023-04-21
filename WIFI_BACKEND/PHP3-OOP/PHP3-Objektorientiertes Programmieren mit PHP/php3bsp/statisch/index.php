<?php
echo "<h3>Statische Eigenschaften und Methoden</h3>";

include "Statisch.php";

$neu = new Statisch();
$neu2 = new Statisch();
$neu3 = new Statisch();
$neu4 = new Statisch();
echo Statisch::$aufrufe;  // $aufrufe + __construct +1 
echo "<br>";

Statisch::setze_0();
echo Statisch::$aufrufe;
