<?php

// PW - erweitern um ein Spezifikum (1. User-PW // 2. Systemgeneriertes PW);
$user_pwd = "maria123"; // User-PW
$salt = "köakkäk"; // Systemseitiges PW, wird dem PW des Users angehängt
$db_pwd = "ba23599ccfcce914cd55f9c24cd071d3";


echo "User-PWD: " . $user_pwd . " " . "<br>" . "DB-PWD: " . $salt;
echo "<br>";
echo "<br>";


// MD5 für beide Passwörter
$results = md5($user_pwd . $salt);
echo "MD5-Created PWD: " . "<br>" . $results;
echo "<br>";
echo "<br>";



//MD5 für User-PW
$results2 = md5($user_pwd);
echo "<br>";
echo $results2;


// Vergleich beider Passwörter
if (    $results2 == md5($user_pwd . $salt)    ) {
    echo "Passwort ist korrekt." . "<br>";
    echo "<br>";
} else {
    echo "<br>" . "Versuche es nochmal!";
}


// echo "<br>" . strlen($results) ;
 
// md5 - errechnet den MD5 eines Strings; Gibt den Hash als 32 Zeichen lange Hexadezimalzahl zurück (Eine mögliche Variante um geschützte PW zu generieren)



// Password-Hash erstellen (password_hash() creates a new password hash using a strong one-way hashing algorithm.)

echo "<br>";
echo password_hash($user_pwd, PASSWORD_DEFAULT); // PW den ich vom User bekomme, wird hier verschlüsselt mit PW-Default-Art




?>

