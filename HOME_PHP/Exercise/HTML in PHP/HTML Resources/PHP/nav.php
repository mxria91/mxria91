
<?php


// Alle Navigationen werden zuerst in einem assoziativen Array gespeichert 

$navBar = [

    "home" => "Startseite",
    "leistungen" => "Leistungen",
    "oeffnungszeiten" => "Öffnungszeiten",
    "kontakt" => "Kontakt"

];

// Im zweiten Schritt werden die HTML Tags PHP leserlich gemacht

echo "<nav><ul>";

// Der Index und der Value aus dem assoziativen Array werden in eigene Variablen gespeichert, damit drauf zugegriffen werden kann.
// Alle Werte aus diesem Array werden verarbeitet mit einem foreach 
// Der HTML-Teil wird in PHP umgeschrieben und die Variablen werden hier verwendet.

foreach ($navbar as $htmlLink => $htmlName) {
    echo "<li><a href='" . $htmlLink . "'>" . $htmlName . "</a></li>";
    echo "</li>";
}


echo "</ul></nav>";

?>
