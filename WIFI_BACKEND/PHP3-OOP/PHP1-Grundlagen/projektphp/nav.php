
<?php
/*
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="leistungen.html">Leistungen</a></li>
                    <li><a href="oeffnungszeiten.html">Öffnungszeiten</a></li>
                    <li><a href="kontakt.html">Kontakt</a></li>
                </ul>
            </nav>
 
 */

 $nav_punkte = array(
    "home" => "Startseite",
    "leistungen" => "Leistungen",
    "oeffnungszeiten" => "Öffnungszeiten",
    "kontakt" => "Kontakt"
 );

 echo "<nav><ul>";
foreach ($nav_punkte as $href => $nav_punkt) {
    echo "<li";
    if ( $seite == $href) {
        echo " class='active'";
    }
    echo ">";
    echo "<a href='?seite=" . $href . "'>".$nav_punkt."</a>";
    echo "</li>";
}
 echo "</ul></nav>";