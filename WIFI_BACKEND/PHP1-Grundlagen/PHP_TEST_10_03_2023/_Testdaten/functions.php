<?php

// Zufallspasswort Generierung 


function zufallspasswort($laenge = 7) { // Parameterübergabe, Länge
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()-_=+"; // erlaubte Charaktere
    $pwd = ""; // PWD vorerst undefiniert
    $charsLaenge = strlen($chars) - 1 ; // Charakterlänge in einer neuen Variable ausgegeben, Länge von $char - 1 ansonsten "Uninitialized string offset"

        for ($i = 0; $i <= $laenge; $i++) {
            $zufallsZahl = rand(0, $charsLaenge);
            $pwd = $pwd . $chars[$zufallsZahl];
        } 

    return $pwd;

}

$pwd = zufallspasswort();

for ($x = 0; $x <= 10; $x++) {
    echo $pwd . "<br>"; 
}





?>


