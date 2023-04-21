<?php

if ( empty($_GET["seite"] ))
{
    $seite = "kontakt";
} else {
    $seite = $_GET["seite"];
}

/*
echo "<pre>";
print_r( $_GET );
echo "</pre>";
*/
echo "<pre>";
print_r( $_POST );
echo "</pre>";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

if ( $seite == "home") {
    $include_datei = "home.php";
    $seitentitel = "Friseur Haarekurz";
    $meta_description = "Friseur erzeugt kurze Haare";
} elseif ($seite == "leistungen") {
    $include_datei = "leistungen.php";
    $seitentitel = "Günstigster Preis";
    $meta_description = "abc";
} elseif ($seite == "kontakt") {
    $include_datei = "kontakt.php";
    $seitentitel = "Fragen sie > uns";
    $meta_description = "Fragen Sie uns \"noch\" heute.";
} elseif ($seite == "oeffnungszeiten") {
    $include_datei = "oeffnungszeiten.php";
    $seitentitel = "Immer für sie da";
    $meta_description = "abc";
} else {
    //404
    $include_datei = "error404.php";
    $seitentitel = "Seite nicht gefunden";
    $meta_description = "abc";
}

//html blockweise wieder zusammensetzen
include "kopf.php";

include "inhalte/" . $include_datei;

include "fuss.php";