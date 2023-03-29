<?php

// Identifizierung über Session-ID, automatische Vergabe. Ist auch notwendig, um die $_SESSION zur Verfügung zu haben.
session_start();


// Verbindung zur Datenbank herstellen
$db = mysqli_connect("localhost", "root", "", "php_ii");  // drei Parameter: (Wohin verbinde ich mich, benutzer-ID, Passwort, Name der Datenbank zu dem ich mich verbinden möchte)

// mysql mitteilen, in welcher Sprache/Kodierung die Befehle kommen
mysqli_set_charset($db, "utf8");  // Datenbankverbindung, Characternamen zB UTF-8


// Diese Funktion überprüft, ob User eingeloggt ist. Wenn nicht, wird er automatisch zum Login Page weiternavigiert.
function ist_eingeloggt() {
    if ( empty($_SESSION["eingeloggt"]) ) {
        // wenn Session leer, dann ist kein User eingeloggt -> Umleitung zur Login-Page
        header("Location: login.php"); // "header" ist eine interne Funktion und wird für die Weiterleitung verwendet
        exit; // wird gemacht, um weitere "geheime" Inhalte darunter nicht zum Browser zu schicken.
    } 
}


//Kurzform von mysql_query - Auslagerung der Funktion im login.php
function query ($sql_befehl) {
    global $db;
    $result = mysqli_query($db, $sql_befehl) or die(mysqli_error($db) . "<br>" . $sql_befehl); // Query Abfrage kann auch nicht erfolgreich sein, wenn das der Fall ist, dann nutzt man DIE und gibt eine Fehlermeldung aus.
    return $result;
}


//Escape-Funktion um SQL-Injections zu vermeiden
function escape($post_var) {
    global $db; // variable nur draußen verfügbar, deshalb GLOBAL
    return mysqli_real_escape_string($db, $post_var);
}







/*

1. session_start definieren. The PHP session system lets you store securely data in the $_SESSION global array. A typical example is to store the user's identifier in the session when they type in their password. This information can be then accessed throughout the whole session.


2. Connection to Data-Base. Aufruf wird in einer Variable gespeichert, so dass der Zugriff immer wieder erfolgen kann. Des Weiteren muss die Kodierung gesetzt werden (Sets the character set to be used when sending data from and to the database server.)


3. 




*/


?>