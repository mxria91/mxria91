<?php

class Goodbye {

    const LEAVING_MESSAGE = "Thank you for visiting us and see you next time! ";


}

// Man kann eine Konstante von außerhalb einer Klasse zugreifen, in dem der Name der Klasse verwendet wird und danach :: (scope resolution operator) gefolgt von der Name der Konstante:
echo Goodbye::LEAVING_MESSAGE;
echo "<br>";
echo "<br>";


// Man kann auch innerhalb einer Funktion (Methode) das Keyword "self" verwenden.
class Welcome {

    const WELCOME_MESSAGE = "Hello, it's good to see you again.";

    public function helloThere() {
        echo self::WELCOME_MESSAGE;
        
    }
}

$greeting = new Welcome();
$greeting->helloThere();


?>