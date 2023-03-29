<?php

    session_start(); // Jede Seite muss mit einer Session starten! 

    // unset($_SESSION["eingeloggt"]);  // Session "Login" auf false setzen
    
    session_unset(); // Alle $_SESSION Variablen löschen. Obere Zeile somit überflüssig

    session_destroy(); // Vernichtet die ganze Session samt Cookie

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout aus Rezepte-Administrationsbereich</title>
</head>
<body>
    <h1>Logout aus Rezepte-Administrationsbereich</h1>
    <p>Sie wurden erfolgreich ausgeloggt.</p>

    <p>
        <a href="login.php">Weiter zum Login!</a>
    </p>
    
</body>
</html>