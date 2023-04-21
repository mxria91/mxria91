<?php
namespace WIFI\Fdb;

class Validieren {
    private array $errors = array(); // $errors werden in einem Array gespeichert

    /**
     * Prüfen, ob ein Wert (aus Formular) ausgefüllt ist.
     * @param string $wert Der Wert, der auf "ausgefüllt" geprüft werden soll.
     * @param string $feldname Name des Formularfeldes für die Fehlermeldung.
     * @return bool False wenn $wert leer ist, ansonsten true.
     */
    public function istAusgefuellt(string $wert, string $feldname): bool {  // bool als Return-Value (Wenn ausgefüllt, weiter machen. Wenn nicht, abbrechen). // zwei Werte müssen übergeben werden
        if (empty($wert)) {
            $this->errors[] = "{$feldname} war leer."; // Ausgabe des Feldnamens als Error-Meldung.
            return false; // bool auf false setzen
        } // else
        return true;
    }

    // füge eine Fehlermeldung hinzu
    public function fehlerHinzu(string $fehlermeldung): void {  // Fehler hinzufügen wenn Formular abgebrochen wurde 
        $this->errors[] = $fehlermeldung; // Fehlermeldung in einer neuen Variable speichern
    }

    // ist ein Fehler aufgetreten?
    public function fehlerAufgetreten(): bool {
        return !empty($this->errors);
    }

    // 
    public function fehlerHtml(): string {
        if ( !$this->fehlerAufgetreten() ) {
            return "";
        }

        // wenn Fehler aufgetreten sind, dann gibt diese als Liste zurück:
        $ret = "<ul>";
        foreach ($this->errors as $error) {
            $ret .= "<li>{$error}</li>";
        }
        $ret .= "</ul>";
        return $ret;
    }

}
