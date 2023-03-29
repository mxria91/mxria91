<?php




// existiert diese Variable -> wurde das Formular abgeschickt?

$fehlermeldungen = array();
$erfolgreich = false;



if (!empty($_POST)) {                   // wenn POST nicht empty ist, dann überprüfe erst alle weiteren Felder ->
    
    if (empty($_POST["name"])) {   // wenn name == empty dann gib eine Fehlermeldung aus!
        $fehlermeldungen[]= "Bitte geben Sie Ihren Namen ein."; // $fehlermeldungen 
    } elseif (strlen($_POST["name"]) < 2 ) {
        $fehlermeldungen[] = "Name zu kurz. ";
    }
    
    if (empty($_POST["email"])) { // wenn email == empty dann gib eine Fehlermeldung aus!
        $fehlermeldungen[]= "Bitte geben Sie Ihre Mail an.";
    } 

    if (empty($_POST["message"])) { // wenn message == empty dann gib eine Fehlermeldung aus!
        
        $fehlermeldungen[]= "Bitte geben Sie eine Nachricht ein.";
    }

    if (empty($fehlermeldungen)) { // wenn es keine fehlermeldungen gibt bzw. == empty, dann setz $erfolgreich auf true
        $erfolgreich = true;

        // wenn keine Fehler aufgetreten sind -< in Datei schreiben und an XY Ordner übergeben!!

        $inhalt = "Anfrage über Kontaktformular:" . "<br>" . 
        "Name: " . 
        $_POST["name"] . 
        "<br>" . 
        "Email: " . 
        $_POST["email"] . 
        "<br>" . 
        "Message: " . 
        $_POST["message"];

        $dateiname = date("Y-m-d_H-i-s");
        // Anfrage in Datei am Server speichern (backup) -> nur in ein existierendes Verzeichnis  // In Root-Verzeichnis speichern!
        file_put_contents("mailbackup/{$dateiname}.txt", $inhalt);

    }
}

/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
*/

?>


<div class="text">
                <h1>Kontakt</h1>
                <div class="left">
                    <h2>Wifi Salzburg</h2>
                    <p>
                        Musterhausstraße 13<br />
                        5020 Salzburg<br />
                        Österreich<br />
                        <br />
                        0043-662-12345<br />
                        <a href="mailto:rainer.christian@gmx.at">rainer.christian@gmx.at</a><br />
                        <a href="http://www.wifisalzburg.at" target="_blank">www.wifisalzburg.at</a><br />
                        <br />
                        <br />
                        Oder einfach Formular ausfüllen, abschicken, fertig!<br />
                        Wir werden uns umgehend um Ihr Anliegen bemühen.
                    </p>
                </div>

                <div class="contact right">
                    
                    <?php 

                    // Ausgabe der Fehlermeldungen 

                        if (!empty($fehlermeldungen))
                    
                        { 
                            echo "Es sind folgende Fehlermeldungen aufgetreten: " . "<br>";
                            echo "<ul>";
                            foreach ($fehlermeldungen as $fehlermeldung) {
                                
                                echo "<li>";
                                echo $fehlermeldung . "<br>";
                                echo "</li>";
                            }
                            echo "</ul>";
                        }
                    ?>

                    <?php 

                        if ($erfolgreich) {
                         echo "<h3> Vielen Dank für Ihre Anfrage! </h3>";
                        } else {                                               // Formular soll angezeigt werden wenn nicht erfolgreich! 
                    ?>

                    <form method="POST">
                        <div>
                            <input type="text" id="name" name="name" value=" <?php if (!empty($_POST["name"])) {
                            echo $_POST["name"];
                            } 
                            ?>" />
                    
                        </div>
                        <div>
                            <input type="text" id="email" name="email" value="" <?php if (!empty($_POST["email"])) {
                            echo $_POST["email"];
                            } 
                            
                            ?> />
                        </div>
                        <div>
                            <textarea id="message" name="message"></textarea>
                        </div>
                        <div style="text-align: right;">
                            <button type="submit" id="submit" name="submit">Absenden</button>
                        </div>
                    </form>   
                    
                    <?php
                    }
                    ?>
                    
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>