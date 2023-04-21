<!-- PHP CONFIG -->
<?php
include "setup.php";

use WIFI\Fdb\Validieren;
use WIFI\Fdb\Mysql;

// LOGIN FORMULAR VALIDIERUNG 
if (!empty($_POST)) {
    // Validieren - Prüfung ob ausgefüllt
    $validieren = new Validieren(); // Erstelle ein neues Validieren Objekt

    $validieren->istAusgefuellt($_POST["benutzername"], "Benutzer");  // Wert + Feldname
    $validieren->istAusgefuellt($_POST["passwort"], "Passwort"); // Wert + Feldname

    // Wann kein Fehler aufgetreten ist: 
    if (!$validieren->fehlerAufgetreten()) { 
        // weiter machen mit Login
        $db = Mysql::getInstanz(); // Prüfung, ob weitere Verbindungen zur DB existieren
        $sqlBenutzer = $db->escape($_POST["benutzername"]);
        $result = $db->query("SELECT * FROM benutzer WHERE benutzername='{$sqlBenutzer}'");
        $benutzer = $result->fetch_assoc();

        if (empty($benutzer) || !password_verify( $_POST["passwort"], $benutzer["passwort"] )) {
            // Fehler: Benutzer existiert nicht.
            $validieren->fehlerHinzu("Benuzter oder Passwort war falsch.");
        } else {
            // Alles ok -> Login in Session merken
            $_SESSION["eingeloggt"] = true;
            $_SESSION["benutzername"] = $benutzer["benutzername"];
            $_SESSION["benutzer_id"] = $benutzer["id"];

            //Umleitung zum Admin-System
            header("Location: index.php");
            exit;
        }

    }
}

?>




<!-- HTML -->

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Administration Fahrzeug-DB</title>
</head>
<body>
    <h1>Administration Fahrzeug-DB</h1>
<?php
    // Fehlermeldungen ausgeben, wenn aufgetreten
    // hier wird überprüft, ob die $validieren existiert- Es wird nur validiert, wenn $_POST nicht empty!
    if (!empty($validieren)) {
        echo $validieren->fehlerHtml();
    }
?>
    <form method="post">
    <div>
        <label for="benutzername">Benutzername:</label>
        <input type="text" name="benutzername" id="benutzername" >
    </div>
    <div>
        <label for="passwort">Passwort:</label>
        <input type="password" name="passwort" id="passwort" >
    </div>
    <div>
        <button type="submit">Einloggen</button>
    </div>
    </form> 
</body>
</html>