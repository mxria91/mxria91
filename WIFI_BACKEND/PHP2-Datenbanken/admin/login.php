<?php


// Alle wichtigen Datenbank-Strukturen ganz zu Beginn einfügen! Gesamt-Überblick dadurch nicht geschadet

include "funktionen.php";




    if(isset($_POST)) {
      // Validierung des Users 
      if ( empty($_POST["username"]) || empty($_POST["pwd"]) ) {
        $error = "Benutzername oder Passwort müssen eingegeben werden";
        } else {
            // Benutzername und Passwort wurden übergeben und müssen kontrolliert werden in der DB -> VALIDIERUNG
            // SQL-Befehle verwenden für Validierungen, SQL-Injections verhindern!


            // Daten von Formularen/Usern ($_GET, $_POST)
            // immer mit mysqli_real_escape_string behandeln !!!!!!! WICHTIG !!!!!!! Sonst ist eine Manipulierung seitens des Users möglich!
            // bevot die Daten in einem Datenbankbefehl verwendet werden

            // AUSLAGERN: $sql_username = mysqli_real_escape_string($db, $_POST["username"]);
            // echo " SELECT * FROM benutzer WHERE benutzername =\"{$_POST["username"]}\"";
            // var_dump($sql_username);
            
            $sql_username = escape ($_POST["username"]);    

            //Datenbank fragen, ob der eingegebene Benutzer existiert.
            $result_login = query("SELECT * FROM benutzer WHERE benutzername='{$sql_username}'");  // Query against a Database 

            // Fetch a result as an associative array - Datensatz aus mysql in ein php Array umwandeln
            $row = mysqli_fetch_assoc($result_login);

            if ($row) {
                // var_dump($row);
                // Benutzername existiert, PW prüfen im nächsten Schritt
                if ( password_verify( $_POST["pwd"], $row["passwort"])   )  // Eingabe-Feldname gegen Associative-Array Key
                {
                     
                    // Alles Ok -> Login Merken!!
                    $_SESSION["eingeloggt"] = true;
                    $_SESSION["username"] = $row["benutzername"];





                    // Letztes Login sowie Anzahl der Logins in DB speichern

                    query(" UPDATE `benutzer` SET `last_login`=NOW(),`login_attempt`=login_attempt+1 WHERE `benutzername` = '{$row['benutzername']}' ");

                    




                    // Umleitung zum Admin-System
                    header("Location: index.php");
                    exit;

                } else {
                    $error = "Benutzername oder Passwort war falsch";
                }

            } else {
                // wenn Benutzername nicht existiert, dann Error Message ausgeben
                // idealerweise dieselbe Fehlermeldung, somit kann man nicht drauf schließen, was von beiden falsch ist (Security Relevant)
                $error = "Benutzername oder Passwort nicht korrekt";
            }
      }
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        h1 {color: #fff}
        body {background-color: #A3E4D7};
    </style>
</head>
<body>

<div class="login">

<h1>L O G I N</h1>


    <form action="" method="POST" class="loginForm">
    
        <div>
            <label for="username">Username: </label>
            <input type="text" name ="username" id="username"> <br>
        </div>

        <div>
            <label for="pwd">Password: </label>
            <input type="password" name ="pwd" id="pwd"> <br>
        </div>

        <div>
            <input type="submit" value="Login">
            <input type="button" value="Cancel">
        </div>

        <?php
        
        if (!empty ($error)) {
            echo "<br><p>{$error}</p>";
        }
        ?>
    
    </form>
</div>
    
</body>
</html>