<?php
namespace WIFI\JWE\Tier;
// Eigener Namensrauf für das Projekt, bzw. diese Klasse
// Wird verwendet um gleich benannte Klassen in verschiedenen Projekten zu erlauben


// Abstract vor Klasse heißt:
// Diese Klasse muss "extended" werden.
// Sie kann nicht selbst als Objekt erstellt werden.
abstract class TierAbstract {

    // Sichtbarkeits-Modifikatoren
    // public: Kann von "außen" (index.php) gelesen und geändert werden.
    // protected: Diese Klasse und Kind-Klassen können die Eigenschaft verwenden.
    // private: Ausschließlich diese Klasse kann die Eigenschaft verwenden.
    private readonly string $name;
    // "readonly" bei Eigenschaften (seit PHP 8.1):
    // Die Eigenschaft kann einmalig gesetzt (construct) und danach
    // nicht mehr geändert werden - nur gelesen.

    public function __construct(string $tiername) {
        $this->name = $tiername;
    }

    // Constructor promotion (seit PHP 8.0):
    // public function __construct(private string $name) {}
    // Bei dieser Schreibweise muss man die Eigenschaft nicht mehr definieren
    // und die Zuweisung im Konstruktor passiert auch automatisch.
    // Ansonsten ist das Verhalten gleich wie oben.


    // public final function getName()
    // Wenn etwas "final" ist, kann keine Kind-Klasse diese Methode
    // überschreiben (z.B. Maus)
    public function getName(): string {
        return $this->name;
    }

    // Abstract vor Methode heißt:
    // Diese Methode MUSS in Kind-Klassen überschrieben werden.
    abstract public function gibLaut(): string;
}