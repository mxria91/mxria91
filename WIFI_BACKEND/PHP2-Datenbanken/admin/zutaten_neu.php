<?php
include "funktionen.php";
ist_eingeloggt();

$erfolg = false;

if(isset($_POST)) {

    // Validierung
    // 1. Prüfung, ob Pflichtfelder befüllt worden sind
    if (    empty ($_POST["titel"])     ) {
        $error = "Geben Sie bitte einen Titel an.";
    } else {
        // 2. Prüfung ob Zutat bereits existiert
        $sql_titel = escape($_POST["titel"]);
        $sql_kcal_pro_100 = escape($_POST["kcal"]); // "kcal" von Name von der Form übernehmen 

        $result = query(" SELECT * FROM zutaten WHERE titel = '{$sql_titel}'");
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            $error = "Diese Zutat existiert bereits!";
        } 

    }

    // Wenn alle Prüfungen erfolgt sind und keine Validierungsfehler existieren, dann Eintrag in die Datenbank

    if (empty($error)) {

        if ($sql_kcal_pro_100 == "" ) {     // 
            $sql_kcal_pro_100 = "NULL";
        }

        query ("    INSERT INTO `zutaten` (`titel`, `kcal_pro_100`) VALUES ('{$sql_titel}', {$sql_kcal_pro_100})     "); // was, wenn nicht beide Werte übergeben werden - dann if einfügen Line 32

        // Erfolgsmeldung 
        $erfolg = true;
    } 
}

include "header.php";

?>



<h1>Zutaten Erfassen</h1>

<?php

if ($erfolg) {
    echo "<p>Die Zutat wurde erfolgreich eingefügt.<br><a href = 'zutaten.php'>Zurück zur Liste</a></p>";
} else {
    
if (!empty ($error)) {
        echo "<br><p>{$error}</p>";
    }
?>

    <form action="" method="POST" class="loginForm">
    
        <div>
            <label for="titel">Titel: </label>
            <input type="text" name ="titel" id="titel" value = "<?php 
                if (isset($_POST["titel"])) {
                        echo htmlspecialchars($_POST["titel"]);
                }
            ?>"> 
            
            <br>

        </div>

        <div>
            <label for="kcal_pro_100">kCal/100: </label>
            <input type="number" name ="kcal" id="kcal" value = "     
                <?php   // Variable soll im Feld bestehen bleiben!
                    if (isset($_POST["kcal"])) {
                        echo htmlspecialchars($_POST["kcal"]);
                    }
                ?>
                "> 
            <br>
        </div>

        <div>
            <input type="submit" value="Erfassen">
            <input type="button" value="Cancel">
        </div>


    </form>
</div>
    
<?php
}
include "footer.php";
