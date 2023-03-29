<?php


// Die Links der Nav-Bars werden als Arrays gespeichert 
$navBar = array (
    "home" => "Startseite", 
    "leistungen" => "Leistungen", 
    "oeffnungszeiten" => "Öffnungszeiten",
     "kontakt" => "Kontakt"
);

// HTML wird in PHP umgeschrieben, Vorlage u.g.
echo "<nav><ul>";

foreach ($navBar as $hrefLink => $hrefName) {
    echo "<li";
    if ( $seite == $hrefLink) {
        echo " class='active'";        
    }  // target_blank !

    echo ">";
    echo "<a href='?seite=" . $hrefLink . "'>" . $hrefName . "</a>";
    echo "</li>";

}

echo "</ul></nav>";


/*

Vorlage

<nav>
    <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="leistungen.html">Leistungen</a></li>
        <li><a href="oeffnungszeiten.html">Öffnungszeiten</a></li>
        <li><a href="kontakt.html">Kontakt</a></li>
    </ul>
</nav>
*/



?>


