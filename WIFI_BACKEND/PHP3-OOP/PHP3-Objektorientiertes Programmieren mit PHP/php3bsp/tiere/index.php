<?php
echo "<h3>Tiere</h3>";

// Der Autoloader erhält Klassennamen (mit namespace), die noch nicht includet wurden.
// Diesen können wir in einen Dateipfad umwandeln und die Datei danach einbinden.
// Wird für jede Klasse bei der ersten Verwendung automatisch aufgerufen.
spl_autoload_register(
    function(string $klasse) {
        // Projekt-spezifisches namespace prefix
        $prefix = "WIFI\\JWE\\";

        // Basisverzeichnis für das namespace prefix
        $basis = __DIR__ . "/";

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

use WIFI\JWE\Tier\Hund\Dogge;
use WIFI\JWE\Tier\Hund;
use WIFI\JWE\Tier\Katze;
use WIFI\JWE\Tier\Maus;
use WIFI\JWE\Tiere;

$dogge = new Dogge("Spike");
$katze = new Katze("Tom");
$maus = new Maus("Jerry");

$tiere = new Tiere();
$tiere->add($dogge);
$tiere->add($katze);
$tiere->add($maus);
$tiere->add(new Hund("Bello"));

echo $tiere->ausgabe();

foreach ($tiere as $tier) {
    echo "<br>";
    echo $tier->getName();
}
