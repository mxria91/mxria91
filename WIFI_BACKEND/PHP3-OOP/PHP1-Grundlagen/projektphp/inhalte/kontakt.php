<?php
/*
$_POST
(
    [name] => Nameasdf
    [email] => E-Mail
    [message] => Ihre Nachricht
    [submit] => 
)
 */
    $fehlermeldungen = array();
    $erfolgreich = false;

    //exitiert diese Variable -> wurde das Formular abgeschickt?
     if ( !empty($_POST)) {
        if ( empty($_POST["name"])) {
            $fehlermeldungen[] = "Bitte geben Sie Ihren Namen an.";
        } else if ( mb_strlen($_POST["name"]) < 2 ) {
            $fehlermeldungen[] = "Ihr Name ist bestimmt länger.";
        }

        if ( empty($_POST["email"])) {
            $fehlermeldungen[] = "Bitte geben Sie Ihre E-Mail an.";
        }
     
    
        if ( empty($fehlermeldungen) ) {
            $erfolgreich = true;

            //wenn keine fehler aufgetreten sind -> in Datei schreiben

            //Inhalt zusammenbauen
            $inhalt = "Anfrage über Kontaktformular: 
                Name: {$_POST["name"]}
                E-Mail: {$_POST["email"]}
                Nachricht: {$_POST["message"]}
                ";
            //Dateiname zusammenbauen
            $dateiname = date("Y-m-d_H-i-s");
            //Anfrage in Datei am Server speichern (backup) -> nur in ein existierendes Verzeichnis
            file_put_contents("mailbackup/{$dateiname}.txt", $inhalt);

        }
    }
            
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
                    //aufgetretene Fehler der Reihe nach ausgeben
                    if (!empty($fehlermeldungen))
                    {
                        echo "<strong>Es sind folgende Fehler aufgetreten:</strong>";
                        echo "<ul>";
                        foreach ($fehlermeldungen as $fehlermeldung)
                        {
                            echo "<li>";
                            echo $fehlermeldung;
                            echo "</li>";
                        }
                        echo "</ul>";
                    }
                    ?>
                    <?php
                    if ($erfolgreich) {
                        echo "<h3>Vielen Dank für Ihre Anfrage.</h3>";
                    } else {
                    ?>
                        <form method="post">
                            <div>
                                <input type="text" id="name" name="name" value="<?php
                                if (!empty($_POST["name"])) {
                                    echo $_POST["name"];
                                }
                                ?>" />
                            </div>
                            <div>
                                <input type="text" id="email" name="email" value="<?php
                                if (!empty($_POST["email"])) {
                                    echo $_POST["email"];
                                }
                                ?>" />
                            </div>
                            <div>
                                <textarea id="message" name="message">Ihre Nachricht</textarea>
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