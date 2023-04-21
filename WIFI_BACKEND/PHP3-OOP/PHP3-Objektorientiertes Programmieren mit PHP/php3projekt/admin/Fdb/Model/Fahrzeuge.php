<?php
namespace WIFI\Fdb\Model;

use WIFI\Fdb\Model\Row\Fahrzeug;
use WIFI\Fdb\Mysql;

class Fahrzeuge {
    /**
     * Gibt alle Fahrzeuge zurück.
     * @return array Ein array mit mehreren Fahrzeug Objekten drin.
     */
    public function alleFahrzeuge(): array {
        $db = Mysql::getInstanz(); // Verbindung erstellen zur DB

        $fahrzeugeGesamt = array(); // speichern der Fahrzeuge in einem Array
        $result = $db->query("SELECT * FROM fahrzeuge"); // Query zur DB - geholten Fahrzeuge als Ergebnisse in einer neuen Variable speichern
        while ($row = $result->fetch_assoc()) { // Holt eine Reihe von Daten und speichert dies als assoziatives Array ab
            $fahrzeugeGesamt[] = new Fahrzeug($row); // Speichern der einzelnen geholten Werte als Array und erzeugen eines neuen Objekts
        }
        return $fahrzeugeGesamt;
    }
}
