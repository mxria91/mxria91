<?php
include "funktionen.php";
ist_eingeloggt();

$errors = array();
$erfolg = false;

// Vorbelegung der Werte wenn im Bearbeiten-Modi
$sql_id = escape($_GET["id"]);


// Prüfen ob das Formular abgeschickt wurde
if (!empty($_POST)) {
    // Escape der Input-Datensätze
    $sql_titel = escape($_POST["titel"]);
    $sql_kcal_pro_100 = escape($_POST["kcal"]);

    // Prüfung, ob Feld vorbelegt wurde oder ob evtl. vorbelegter Wert gelöscht wurde
    if (  empty($sql_titel)  ) {
        $errors = "Bitte geben Sie einen Titel für die Zutat ein.";
    } else {
        $result = query("   SELECT * FROM zutaten WHERE titel = '{$sql_titel}' AND id != '{$sql_id}'  ");
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $errors[] = "Diese Zutat existiert bereits.";
        }
    }

    if ( empty($errors)) {
        if ($sql_kcal_pro_100 == "" ) { 
            $sql_kcal_pro_100 = "NULL";
        }

        query ("   UPDATE `zutaten` SET titel='{$sql_titel}', kcal_pro_100 = {$sql_kcal_pro_100} WHERE id = '{$sql_id}'");

        // Erfolgsmeldung 
        $erfolg = true;
    }
}


include "header.php";
?>



<h1>Zutaten Bearbeiten</h1>

<?php

if ($erfolg) {
    echo "<p>Zutat wurde erfolgreich bearbeitet.<br><a href = 'zutaten.php'>Zurück zur Liste</a></p>";
    } else {
    
        if (!empty($errors)) {
            echo "<ul>";
                foreach ($errors as $key => $error) {
                    echo "<li>{$error}</li>";
                }
            echo "</ul>";
        }

        // Datenbank nach Zutat-Datensatz fragen zur Vorbefüllung
        $result = query("SELECT * FROM zutaten WHERE id='{$sql_id}'");
        $row = mysqli_fetch_assoc($result);

?>

    <form action="" method="POST" class="loginForm">
    
        <div>
            <label for="titel">Titel: </label>
            <input type="text" name ="titel" id="titel" value = "<?php 
                if (isset($_POST["titel"])) {
                        echo htmlspecialchars($_POST["titel"]);
                } else {
                    echo htmlspecialchars($row["titel"]);
                } ?>"> 
        </div>

        <br>

        <div>
            <label for="kcal_pro_100">kCal/100: </label>
            <input type="number" name ="kcal" id="kcal" value = "<?php   // Variable soll im Feld bestehen bleiben!
                    if (isset($_POST["kcal"])) {
                        echo htmlspecialchars($_POST["kcal"]);
                    } else {
                        echo htmlspecialchars($row["kcal_pro_100"]);
                    }
                ?>"> 
            <br>
        </div>

        <div>
            <input type="submit" value="Änderung Speichern">
            <input type="button" value="Abbrechen">
        </div>


    </form>
</div>
    
<?php
    }

include "footer.php";
