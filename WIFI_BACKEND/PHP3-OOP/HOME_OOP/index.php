<?php

spl_autoload_register('myAutoLoader');  // hier wird einfach die Funktion übergeben mit ' ' 

function myAutoLoader($className) {
    $path = "classes/";  // hier wird der Pfad angegeben
    $ext = ".class.php"; // hier wird die extension angegeben
    $fullPath = $path . $className . $ext; // hier wird der komplette Pfad angegeben mit samt Klassenname der übergeben wird.

    include_once $fullPath; // include_once muss angegeben werden!
}

// Zweite Möglichkeit den Autoloader zu verwenden:

/*

spl_autoload_register(
    function(string $klasse) {
        // Projekt-spezifisches namespace prefix
        $prefix = "WIFI\\Fdb\\";

        // Basisverzeichnis für das namespace prefix
        $basis = __DIR__ . "/Fdb/";

        // Wenn die Klasse das prefix nicht verwendet, abbrechen
        $laenge = strlen($prefix);
        if (substr($klasse, 0, $laenge) !== $prefix) {
            return;
        }

        // Klasse ohne Prefix
        $relativ = substr($klasse, $laenge);

        // Dateipfad erstellen
        $datei = $basis . str_replace("\\", "/", $relativ) . ".php";
 
        // Wenn die Datei existiert, einbinden.
        if (file_exists($datei)) {
            include $datei;
        }
    }
);
 


 */




?>
<?php

$person1 = new Person("Daniel", 32);
echo $person1->getPerson();

echo "<br>";

$house1 = new House("house");
echo $house1->getAddress();

echo "<br>";

?>

