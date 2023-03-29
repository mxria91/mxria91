<?php
// Einbinden von verschiedenen HTML Codes


if (empty($_GET["seite"])) {
    $seite = "home";
} else {
    $seite = $_GET["seite"];
}



if ($seite == "home") {
    $include_datei = "home.php";
    $seitentitel = "Welcome to our Homepage";
    $metaDescription = "abcdef";
} else if ($seite == "leistungen") {
    $include_datei = "leistungen.php";
    $metaDescription = "abcdef";
    $seitentitel = "Services";
} else if ($seite == "kontakt") {
    $include_datei = "kontakt.php";
    $seitentitel = "Contact Page";
    $metaDescription = "abcdef";
} else if ($seite == "oeffnungszeiten") {
    $include_datei = "oeffnungszeiten.php";
    $seitentitel = "Opening Hours";
    $metaDescription = "abcdef";
} else {
    $include_datei = "error404.php";
    $seitentitel = "Errorpage";
    $metaDescription = "abcdef";
}

 

// Header
include "header.php";

// Inhalt 
include "inhalt/" . $include_datei;

// Footer
include "footer.php";

?>