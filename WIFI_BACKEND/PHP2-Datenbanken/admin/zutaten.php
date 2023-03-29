<?php
include "funktionen.php";
ist_eingeloggt();

include "header.php";
?>

<h1>Zutaten</h1>



<!-- Link für die Erfassung neuer Zutaten // Datenbank Manipulieren -->

<p><a href="zutaten_neu.php">Neuerfassung</a></p>







<?php

$result = query("   SELECT * FROM zutaten ");
 

// Ausgabe des Querys als Associative Array in einer Tabelle 

echo "<table border='1'>";
            echo "<thead>";
                echo "<th>ID</th>";
                echo "<th>Titel</th>";
                echo "<th>kCal_pro_100</th>";
            echo "</thead>";

            echo "<tbody>";
            
            while(  $row = mysqli_fetch_assoc($result)  ) { //
                echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";  // zwei Spalten ausgeben
                    echo "<td>" . $row["titel"] . "</td>";
                    echo "<td>" . $row["kcal_pro_100"] . "</td>";
                    echo "<td>" . "<a href='zutaten_bearbeiten.php?id={$row["id"]}'>Bearbeiten</a>" . "</td>";
                echo "</tr>";
            }

            echo "</tbody>";
echo "</table>";


?>


<?php
include "footer.php";
?>