<?php
namespace WIFI\Fdb;


// Klasse für die Verbindung zur Datenbank 
final class Mysql {

    // Singleton Implementierung - Vermeidet mehrfache Erstellung des selben Objekts.

    /* 
    * Hier gewünscht, um nicht mehrere Datenbank-Verbindungen
    * gleichzeitig zu öffnen.
    * Schritte:
    */


    // 1) Anlage der Instanz:
    private static ?Mysql $instanz = null;

    // 2) Diese statische Methode gibt die Instanz zurück
    public static function getInstanz(): Mysql {
        if ( NULL === self::$instanz ) { // oder Bedingung:   !self::$instanz
            self::$instanz = new self;
        }
        return self::$instanz;
    }
    // Singleton Implementierung ENDE



    // Datenbankverbindung:
    private \mysqli $db;

    private function __construct() {
        $this->verbinden();
    }

    private function verbinden(): void {
        // Mysqli-Objekt erstellen und Verbindung aufbauen
        $this->db = new \mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORT, MYSQL_DATENBANK); // da wir hier auf das Objekt zugreifen $this-> verwenden!
        // Zeichensatz mitteilen
        $this->db->set_charset("utf8"); // nach durchführen von dieser Funktion wird die Variable vernichtet, deshalb speichern wir diese in einer Eigenschaft! \mysqli $db
    }

    public function escape(string $wert): string {
        return $this->db->real_escape_string($wert);
    }

    public function query(string $sqlBefehl): \mysqli_result|bool {
        $result = $this->db->query($sqlBefehl);
        return $result;
    }

}
